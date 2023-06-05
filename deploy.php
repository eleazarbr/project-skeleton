<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';

$envFile = __DIR__ . '/.env';
$envVars = parse_ini_file($envFile);
foreach ($envVars as $key => $value) {
    putenv("{$key}={$value}");
}

set('git_tty', true);
set('git_username', 'eleazarbr');
set('git_repository', 'project-skeleton');
set('repository', 'git@github.com:{{git_username}}/{{git_repository}}.git');
set('application', 'project-skeleton');
set('keep_releases', 3);
set('composer_options', '--verbose --prefer-dist --no-progress --no-interaction --no-scripts --no-dev --optimize-autoloader');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('production')
    ->set('hostname', getenv('DEPLOYER_PRODUCTION_HOST'))
    ->set('remote_user', getenv('DEPLOYER_PRODUCTION_USER'))
    ->set('deploy_path', '/var/www/{{application}}');

// Deploy Task using Laravel Recipe and custom tasks.
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:optimize:clear',
    'artisan:config:cache',
    'artisan:route:cache',
    'artisan:view:cache',
    'artisan:event:cache',
    'artisan:migrate',
    'artisan:db:seed',
    'npm:install',
    'npm:build',
    'deploy:publish',
]);

// Run the command `dep deploy:update_env` to update the .env file in the production environment.
task('deploy:update_env', function () {
    $localEnvFile = '.env.production';
    $remoteEnvFile = '.env';

    upload($localEnvFile, '{{deploy_path}}/shared/' . $remoteEnvFile);
})->desc('Update .env file');

task('npm:build', function () {
    cd('{{release_path}}');
    run('npm run build');
});

desc('Enter maintenance mode');
task('deploy:down', function () {
    cd('{{release_path}}');
    run('php artisan down');
});

desc('Exit maintenance mode');
task('deploy:up', function () {
    cd('{{release_path}}');
    run('php artisan up');
});

// Hooks
after('deploy:failed', 'deploy:unlock');
before('deploy:symlink', 'deploy:down');
after('deploy:symlink', 'deploy:up');
