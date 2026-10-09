<!--suppress HtmlDeprecatedAttribute -->
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://getbootstrap.com" target="_blank"><img src="https://blog.getbootstrap.com/assets/img/2026/09/bootstrap-v6-alpha-social.png" width="400" alt="Bootstrap Logo"></a></p>

# Laravel - Bootstrap 6


## About Laravel 13

[Github](https://github.com/laravel/laravel)

Laravel is accessible, powerful, and provides tools required for large, robust applications.

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

- Read the [documentation](https://laravel.com/docs).


## About Bootstrap 6

[Github](https://github.com/twbs/bootstrap)

Bootstrap is the open source design system for everyone.

Bootstrap 6 has been rebuilt for today's web as a framework-agnostic design toolkit that anyone—human or AI, novice or pro—can use to build anything. New standards, new components, an updated visual design, CSS-first theming, and more powerful JavaScript plugins.

- Discover more about the new features in Bootstrap 6 in the [blog](https://blog.getbootstrap.com/2026/10/08/bootstrap-6-alpha).
- Read the [documentation](https://getbootstrap.com/docs/6.0/getting-started/install).


## Installation steps

These are the steps taken during the installation of this project:

### Laravel

- Clean Laravel installation (using the Laravel installer)
- Updated .env variables:
```dotenv
APP_NAME="Laravel Bootstrap 6"
APP_URL=https://laravel-bootstrap-6.test
```

### Bootstrap

- Installed Bootstrap
```batch
npm install bootstrap@6.0.0-alpha.1
```
- Copied Bootstrap AI skills (`npx skills add twbs/bootstrap`)
- Removed Tailwind and other dependencies not needed for Bootstrap. Consult the `package.json` file for changes.
- Installed the fontaine NPM package
- Installed @floating-ui/dom NPM package
- Installed vanilla-calendar-pro NPM package
- Installed Sass NPM package
- Modified `app.js` and `app.scss`
- Updated `vite.config.js`
- Updated welcome blade with bootstrap styles
- Run the application


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Bootstrap code and documentation copyright 2011-2026 the [Bootstrap Authors](https://github.com/twbs/bootstrap/graphs/contributors). Code released under the [MIT License](https://github.com/twbs/bootstrap/blob/main/LICENSE). Docs released under [Creative Commons](https://creativecommons.org/licenses/by/3.0/).
