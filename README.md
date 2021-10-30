<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Infocasas backend API

    Recomendable trabajar sobre linux o wsl2 
    Cambiar el nombre de .env.example a .env

Pasos a seguir (es necesario tener docker instalado):
<br>
<code> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</code><br>
<code> php composer-setup.php</code><br>
<code> php -r "unlink('composer-setup.php');"</code><br>
<code> php composer.phar require laravel/sail --dev</code><br>
<code> docker-compose up -d</code><br>
<code> alias sail='bash vendor/bin/sail'</code><br>
<code> sail up -d</code><br>
<code> sail composer install</code><br>
<code> sail artisan migrate --seed</code><br>
