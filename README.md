<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

[![Laravel](https://github.com/mycoding-academy/livewire-organization-crud-demo/actions/workflows/laravel.yml/badge.svg)](https://github.com/mycoding-academy/livewire-organization-crud-demo/actions/workflows/laravel.yml)

## About Application
Laravel application to domonstrate Livewire CRUD using Bootstrap Modal. This can be starter kit for intranet service application which requires basic employees and organization units management.

## How to run the application
- Clone this repository.
- Change directory to the application folder.
- Copy .env.example to .env file.
- Create your database and put related information in the .env file.
- Edit first user data in the .env file.
- Install PHP packages.
  ```
  composer install
  ```
- Create .env
  ```
  cp .env.example .env
  ```
- generate APP_KEY to .env
  ```
  php artisan key:generate
  ```
- Install Node packages.
  ```
  npm install
  ```
- Migrate database.
  ```
  php artisan migrate
  ```
- Seed initial data.
  ```
  php artisan db:seed
  ```
- Run the application in your terminal!
  ```
  php artisan serve
  ```
- And run Vite in other termial.
  ```
  npm run dev
  ```
- Or You want production mode
  ```
  npm run build
  ```

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
