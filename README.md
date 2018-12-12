# Laravel-Dusk
Laravel-Dusk UI Automation

Requirements:

1. Laravel
2. Dusk
3. Pickle (BDD for PHP)

Links:

https://laravel.com/
https://laravel.com/docs/5.7/dusk
https://github.com/alnutile/pickle

Run:

pickle run --context=browser tests/Feature/ExampleTest.feature

Structure:

:Note: The important parts are inside 'tests', the other folders are generated with Laravel.

-test
|-Browser
  |-Components
  |-console
  |-Pages
    |-ExampleTestPage.php
  |-screenshots
  |-ExampleTestTest.php
|-Feature
  |-ExampleTest.feature
|-CreatesApplication.php
|-DuskTestCase.php
|-TestCase.php
