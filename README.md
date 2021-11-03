<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# laravel-simple-landing-page" 


## How to clone this project

1. Run `git clone 'link projer github'
```
git clone https://github.com/muhamien/laravel-simple-landing-page.git
```

2. Installing the composer
```
composer install
```

3. Run ``cp .env.example .env`` or ``copy .env.example .env ``

4. Run ``php artisan key:generate``

5. Run ``php artisan migrate``

6. Run ``php artisan serve``


## Instal breeze with bootstrap
# Official documentation
Visit repository on (github)[https://github.com/khadegd/laravel-breeze-bootstrap]
```
laravel new my-app

cd my-app

composer require khadegd/laravel-breeze-bootstrap --dev

php artisan breeze:install

```


## How to Install Bootstrap on new project

1. Create new Laravel project

```
# laravel new project-name

or

# composer create-project --prefer-dist laravel/laravel project-name
```

2. Kemudian install node modules.

```
# npm install
```

3. Lalu kita install bootstrap dan library pendukung.

```
npm install bootstrap jquery popper.js --save-dev

npm install @popperjs/core

```

4. Kemudian buka bootstrap.js dan tambahkan dibawah ini.

```
//resources/js/bootstrap.js
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

```

5. Setelah itu kita install sass dan sass-loader.

```
npm install sass sass-loader --save-dev
```

6. Selanjutnya buat folder baru di direktori resources dengan nama ```sass```. Pada folder sass kita tambahkan file baru dengan nama ```app.scss```, dan kita import bootstrap.

```
//resources/sass/app.scss
@import '~bootstrap/scss/bootstrap';
```

7. Setelah bootstrap di import kita akan gunakan compiler laravel mix. Kita buka file webpack.mix.js, buat seperti dibawah ini.

```
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
```
  Install laravel ui
  - instal laravel ui
  ```
  composer require laravel/ui
  ```
  
  - [optional] use vuejs or reactjs 
  ```
  php artisan ui vue --auth
  or
  php artisan ui react --auth
  ```

  - instal npm
  ```
  npm install
  ```
  - ``npm run dev``

8. Lalu jalankan perintah npm run dev.

```
@labootstrap  ➜  npm run dev
DONE  Compiled successfully in 5866ms                                                                        2:25:35 PM
       Asset      Size   Chunks             Chunk Names
/css/app.css   179 KiB  /js/app  [emitted]  /js/app
  /js/app.js  1.08 MiB  /js/app  [emitted]  /js/app

```

9. Pemanggilan

```
<link href=" {{ mix('css/app.css') }}" rel="stylesheet">
<script src="{{ mix('js/app.js') }}"></script>

```

10. Sebagai contoh, silahkan buka file welcome.blade.php, ubah html yang ada dengan dibawah ini.

```
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>

```

Terakhir tinggal jalankan `php artisan serve` dan lihat hasilnya. Silahkan dicoba.
