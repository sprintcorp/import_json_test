<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

Laravel application to import large JSON data and other file format:


## Steps to set up the application

Pull project to system and **cd into project directory** and run **composer install** to install vendor files needed to run the application successfully then start the make a copy of **.env** from the **.env.example** then configure according to server configuration.
Run **php artisan migrate** to create table into database from migration file then **php artisan serve** to start project. Whatever project will run on port 8000 provided the port is free and url will be **http://127.0.0.1:8000**. To upload json file route is **http://127.0.0.1:8000/api/information** method is **POST**. Open **POSTMAN** the copy the url into it **http://127.0.0.1:8000/api/information** using formdata, the input type should be changed from text to file and the key name is file, upload JSON file from file upload input then send request. Upload of files should happen in less than 5 seconds.
