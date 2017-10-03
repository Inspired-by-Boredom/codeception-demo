<p align="center">
    <a href="http://codeception.com/" target="_blank">
        <img src="https://avatars3.githubusercontent.com/u/1288753" height="100px">
    </a>
    <h1 align="center">Demo project for Codeception</h1>
    <br>
</p>

This is demo project for examples of unit testing with
[Codeception](http://codeception.com/) full-stack framework and [Yii2](http://yiiframework.com).

Install Codeception into project
------------------------------
`$ composer require --dev "codeception/codeception"`

Codeception commands
--------------------
`$ ./vendor/bin/codecept bootstrap` - creates files for tests

`$ ./vendor/bin/codecept generate:test unit DemoTest` - generates unit test-case with name `DemoTest`

`$ ./vendor/bin/codecept build` - generates files for tests running

`$ ./vendor/bin/codecept run unit` - run unit tests

`$ ./vendor/bin/codecept run unit DemoTest` - run test by name

Useful links
------------
* [Testing in Yii2](http://www.yiiframework.com/doc-2.0/guide-test-overview.html)
* [Codeception Unit tests](http://codeception.com/docs/05-UnitTests)
* [Codeception module Yii2](http://codeception.com/docs/modules/Yii2)
* [Codeception module Db](http://codeception.com/docs/modules/Db)
* [Assert methods](http://codeception.com/docs/modules/Asserts)

Presentation
------------
[http://slides.com/greeflas/codeception](http://slides.com/greeflas/codeception)

Licence
-------
This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2017, [Vintage Web Production](https://vintage.com.ua/)