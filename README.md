<p align="center">
    <a href="http://codeception.com/" target="_blank">
        <img src="https://avatars3.githubusercontent.com/u/1288753" height="100px">
    </a>
    <h1 align="center">Demo project for Codeception</h1>
    <br>
</p>

This is demo project for examples of unit testing with
[Codeception](http://codeception.com/) full-stack framework and [Yii2](http://yiiframework.com).

Install Codeception to project
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

[Assert methods](http://codeception.com/docs/modules/Asserts)

Licence
-------
This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2017, [Vintage Web Production](https://vintage.com.ua/)