#!/bin/bash

check_status() {
  if [ $1 -ne 0 ];then
    echo $2
  fi
}

composer install
check_status $? "You need to install composer or add it to your PATH variable. Download Link: https://getcomposer.org/download/"
cp .env.example .env
php artisan key:generate
npm install
check_status $? "You need to install npm/nodejs or add it to your PATH/configure the installation directory. Download Link: https://nodejs.org/en/download/"
protractor --version
check_status $? "You need to install protractor or you may need to install it globally with npm install -g protractor. See the readme file for more instructions."


printf "Don't forget to change your database config in .env file, and migrate
       the database tables with 'php artisan migrate'\n\n"
