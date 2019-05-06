# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Installation

run the following commands:
1. Clone the repo
$ git clone https://github.com/xuqiZhou/Scoreboard Scoreboard

2. Go into app's directory
$ cd Scoreboard

3. Install app's dependencies
$ npm install

# How to run the App

## 1. Database Connection.
Make sure MySql is running in the background and login as a root user.
Create a database with name "scoreboard", or change the database name in the .env file to the database you have.
Also in the .env file, change {{mypassword}} to your database password.

## 2. Migration and data seeding.
In your terminal, run the following scripts

$php artisan migrate

$php artisan db:seed

## 3. Start both back-end and front-end
In your terminal, run the following scripts

$php -S localhost:8000 -t public

Open a new terminal, run

$npm run watch

## 4. Use the App
In your browser, go to localhost:8000





