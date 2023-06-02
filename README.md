<a name="readme-top"></a>

<!-- PROJECT SHIELDS -->
[![Contributors][image-1]][1]
[![Forks][image-2]][2]
[![Stargazers][image-3]][3]
[![Issues][image-4]][4]
[![MIT License][image-5]][5]
[![LinkedIn][image-6]][6]

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/eleazarbr/project-skeleton">
    <img src="public/logo.png" alt="Logo" width="80" height="80">
  </a>
  <h3 align="center">Project Skeleton</h3>
  <p align="center">
    A foundational template for all my projects.
    <!-- <br /> -->
    <!-- <a href="https://github.com/eleazarbr/project-skeleton"><strong>Explore the docs »</strong></a> -->
    <br />
    <br />
    <!-- <a href="https://github.com/eleazarbr/project-skeleton">View Demo</a>
    · -->
    <a href="https://github.com/eleazarbr/project-skeleton/issues">Report Bug</a>
    ·
    <a href="https://github.com/eleazarbr/project-skeleton/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
```
<li>
  <a href="#about-the-project">About The Project</a>
  <ul>
    <li><a href="#built-with">Built With</a></li>
  </ul>
</li>
<li>
  <a href="#getting-started">Getting Started</a>
  <ul>
    <li><a href="#prerequisites">Prerequisites</a></li>
    <li><a href="#installation">Installation</a></li>
  </ul>
</li>
<li><a href="#usage">Usage</a></li>
<li><a href="#roadmap">Roadmap</a></li>
<li><a href="#contributing">Contributing</a></li>
<li><a href="#license">License</a></li>
<li><a href="#contact">Contact</a></li>
```
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## About The Project

[![Project Skeleton Screen Shot][image-7]][7]

This repository provides a pre-configured template equipped with basic tools for kick-starting any project.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

* [![Laravel][image-13]][13]
* [![Vue][image-10]][10]
* [![Vite][image-11]][11]
* [![Bulma][image-9]][9]
* [![Tailwind CSS][image-14]][14]
* [![Inertia][image-12]][12]
* [![Oruga][image-8]][8]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->
## Getting Started

Follow these steps to get a local copy up and running:

### Prerequisites

In the future, options for Docker or Laravel Sail will be available. Currently, installation requires a web server like [NGINX](https://www.nginx.com/) and the following tools:

- [PHP ^8.1](https://www.php.net/)
  - [Laravel Required PHP Extensions](https://laravel.com/docs/7.x#server-requirements)
- [Composer](https://getcomposer.org/)
  - [Rector](https://getrector.org/) (global install optional)
  - [PHP Coding Standards Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) (global install optional)
  - [PHPMD - PHP Mess Detector](https://phpmd.org/) (global install optional)
- [Node 16.18](https://nodejs.org/en/)
- [NPM 8.19](https://www.npmjs.com/)
- An SSL setup (needed for Websockets).

### Installation

To create a new project, execute:

```bash
composer create-project eleazarbr/project-skeleton name
```

Install JavaScript dependencies:

```bash
npm install
```

Compile assets:

```bash
npm run dev
```

Next, set up your .env file. Basic configurations include:

- App name & URL.
- Database connection and migration: `php artisan migrate`.
- Mail settings (example: Mailtrap).
- Execute: `php artisan storage:link`.

Now, you should be able to access the project from your browser.

<!-- USAGE EXAMPLES -->
## Usage

The project incorporates LTS versions of Laravel and Vue. Additionally, code fixers and linters are included to ensure coding standards are maintained. Here's a quick rundown:

- Apply rules from the rector.php file: `composer rector`
- Fix the PHP code: `composer php-cs-fixer-fix`. (Laravel Pint will be used in the future)
- Run mess detector (optional): `composer php-md`
- Fix JavaScript code: `npm run lint-fix`
- Format JavaScript code with Prettier: `npm run format`
- Test the entire suite: `php artisan test`

**Browser Testing**:

- Install Laravel Dusk: `php artisan dusk:install`.
- Run tests: `php artisan dusk`.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ROADMAP -->
## Roadmap

- [x] Implement Bulma CSS
- [x] Add i18n.
- [ ] Replace PHP CS Fixer with Laravel Pint
- [ ] Add Docker / Laravel Sail support.

For a complete list of proposed features and known issues, visit the [open issues][18].

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->
## Contributing

Your contributions help make the open-source community a space for learning, inspiration, and creativity. Any contributions are greatly appreciated.

If you have suggestions for improvements, please fork the repo and create a pull request or open an issue tagged as "enhancement". Don't forget to star the project!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/amazing-feature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->
## License

This project is distributed under the MIT License. For more information, please refer to the LICENSE.txt file.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->
## Contact

Eleazar Resendez - [@eleazarbr][19] - eleazar@eresendez.com

Project Link: [https://github.com/eleazarbr/project-skeleton][20]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[1]:	https://github.com/eleazarbr/project-skeleton/graphs/contributors
[2]:	https://github.com/eleazarbr/project-skeleton/network/members
[3]:	https://github.com/eleazarbr/project-skeleton/stargazers
[4]:	https://github.com/eleazarbr/project-skeleton/issues
[5]:	https://github.com/eleazarbr/project-skeleton/blob/master/LICENSE
[6]:	https://linkedin.com/in/eresendez
[7]:	https://example.com
[8]:	https://oruga.io/
[9]:	https://bulma.io/
[10]:	https://vuejs.org/
[11]:	https://vitejs.dev/
[12]:	https://inertiajs.com/
[13]:	https://laravel.com
[14]:	https://tailwindcss.com/
[18]:	https://github.com/eleazarbr/project-skeleton/issues
[19]:	https://twitter.com/eleazarbr
[20]:	https://github.com/eleazarbr/project-skeleton


[image-1]:	https://img.shields.io/github/contributors/eleazarbr/project-skeleton.svg?style=for-the-badge
[image-2]:	https://img.shields.io/github/forks/eleazarbr/project-skeleton.svg?style=for-the-badge
[image-3]:	https://img.shields.io/github/stars/eleazarbr/project-skeleton.svg?style=for-the-badge
[image-4]:	https://img.shields.io/github/issues/eleazarbr/project-skeleton.svg?style=for-the-badge
[image-5]:	https://img.shields.io/github/license/eleazarbr/project-skeleton.svg?style=for-the-badge
[image-6]:	https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[image-7]:	public/screenshot.png
[image-8]:	https://img.shields.io/badge/Oruga-243A21?style=for-the-badge&logo=oruga&logoColor=white
[image-9]:	https://img.shields.io/badge/Bulma-63C498?style=for-the-badge&logo=bulma&logoColor=white
[image-10]:	https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[image-11]:	https://img.shields.io/badge/Vite-242424?style=for-the-badge&logo=vite
[image-12]:	https://img.shields.io/badge/Inertia-B794F4?style=for-the-badge&logo=inertiajs&logoColor=white
[image-13]:	https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[image-14]:	https://img.shields.io/badge/TailwindCSS-38BDF8?style=for-the-badge&logo=tailwindcss&logoColor=white
