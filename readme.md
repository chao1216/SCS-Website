So this is the Sewanee Computing Society website. 

To get up and running, run the following commands in a terminal:

`git clone https://github.com/Sewanee-Computing-Club/SCS-Website`<br>
`cd SCS-Website`<br>
`./install.sh`<br>
`npm install` (note that this might need to be run as sudo user)<br>
`npm install -g protractor` (only need to do this once, installs protactor globally)<br>

You will then need to configure your mysql database name,
user name, and password in the .env file. Run php artisan migrate --seed to seed and migrate tables

To launch site:

`php artisan serve`

To run tests:

Karma

Assuming you ran `npm install`, then you should only 
have to run `karma start`. It will watch your test files 
located in `public/app/**/*.js` and rerun the tests when you change
any of those files

PHP tests

Just run phpunit from project root directory 

Protractor

Assuming you ran `npm install -g protractor` and <strong>you have a working installation of JDK</strong>, then run:

`webdriver-manager update`
`webdriver-manager start`

This will start up the selenium server which will run the tests.

Unlike karma, you have to run the tests manually.
This can be done with protractor conf.js (from project root directory)

Potential problems:

1. You must have a working installation of the JDK in your path.
You can check this with java --version; if it says command not found, you need to install the JDK

