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
    Basic template for my projects.
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

Repository template with basic tools for my projects.

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

To get a local copy up and running follow these steps:

### Prerequisites

Later, we'll have the option to use Docker or Laravel Sail. For now, we have to install a web server like [NGINX](https://www.nginx.com/) and the next tools:

- [PHP ^8.1](https://www.php.net/)
  - [Laravel Required PHP Extensions](https://laravel.com/docs/7.x#server-requirements)
- [Composer](https://getcomposer.org/)
  - [Rector](https://getrector.org/) (global install optional)
  - [PHP Coding Standards Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) (global install optional)
  - [PHPMD - PHP Mess Detector](https://phpmd.org/) (global install optional)
- [Node 16.18](https://nodejs.org/en/)
- [NPM 8.19](https://www.npmjs.com/)

### Installation

Create a new project by running the following command:

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

Set up your .env file, basic changes like:

- App name & URL.
- Database connection.
- Mail settings (e.g. Mailtrap).

Now you will be able to access from the browser.

<!-- USAGE EXAMPLES -->
## Usage

This project uses Laravel and Vue in their latest versions.

Additionally, code fixers and linters were added to maintain a standard in the code base.

- Run `composer rector` to apply rules from the `rector.php` file
- Run `composer php-cs-fixer-fix` to fix the PHP code.
Later we'll use Laravel Pint :)
- Optionally, run `composer php-md` for mess detector.
- Run `npm run lint-fix` to fix the JavaScript code.
- Run `npm run format` to format your JavaScript code using Prettier.
- Run `php artisan test` to test the entire suite.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ROADMAP -->
## Roadmap

- [x] Optionally use Bulma CSS.
- [ ] Use Laravel Pint instead of PHP CS Fixer.
- [ ] Use Docker / Laravel Sail.

See the [open issues][18] for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/amazing-feature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

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
[5]:	https://github.com/eleazarbr/project-skeleton/blob/master/LICENSE.txt
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
