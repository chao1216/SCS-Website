So this is the Sewanee Computing Society website. 

To get up and running, run the following commands in a terminal:

`git clone https://github.com/Sewanee-Computing-Club/SCS-Website`<br>
`cd SCS-Website`<br>
`./install.sh`<br>

You may get several messages saying you need to install either composer, protractor, or npm/nodejs

If you get an EACESS error message when running ./install.sh, you need to 
<a href="https://docs.npmjs.com/getting-started/fixing-npm-permissions">change your permissions</a>

A temporary fix is to run `sudo npm install` but not recommended.

You will then need to configure your mysql database name,
user name, and password in the .env file. <br>
Run `php artisan migrate --seed` to seed and migrate tables

<strong>To launch site:</strong>

`php artisan serve`


Tests

<strong>Karma</strong><br>
Located alongside the features in `public/app/**/*.js`

Assuming you ran `npm install`, then you should only 
have to run `karma start`. It will watch your test files 
located in `public/app/**/*.js` and rerun the tests when you change
any of those files

<strong>PHP</strong><br>
Located in `tests/**/*Test.php`

Just run phpunit from project root directory 

<strong>Protractor</strong><br>
e2e tests are located in `public/app/e2e-tests/**/*.js`

Assuming you ran `npm install -g protractor` and <strong>you have a working installation of JDK</strong>, then run:

`webdriver-manager update`
`webdriver-manager start`

This will start up the selenium server which will run the tests.

Unlike karma, you have to run the tests manually.
This can be done with protractor conf.js (from project root directory)

<strong>Potential problems:</strong>

1. You must have a working installation of the JDK in your path.
You can check this with java --version; if it says command not found, you need to install the JDK

