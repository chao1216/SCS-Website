#!/bin/bash

composer install
cp .env.example .env
php artisan key:generate

printf "Don't forget to change your database config in .env file, and migrate
       the database tables with 'php artisan migrate'\n\n"
