#!/bin/bash

composer install
RETVAL=$?
if [ $RETVAL -ne 0]; then
  echo "You need to install composer or add it to your PATH variable. Download Link: https://getcomposer.org/download/"
cp .env.example .env
php artisan key:generate
npm install
if [ $RETVAL -ne 0]; then
  echo "You need to install npm/nodejs or add it to your PATH/configure the installation directory. Download Link: https://nodejs.org/en/download/


printf "Don't forget to change your database config in .env file, and migrate
       the database tables with 'php artisan migrate'\n\n"
