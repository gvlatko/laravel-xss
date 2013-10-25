laravel-xss
===========

A port of CodeIgniter Security Library to Laravel for XSS prevention

Installation
------------

Include the package in your composer file

    "require": {
        "gvlatko/laravel-xss": "dev-master"
    }
    

Run composer update

Add the service provider in you app.php config file in the 'providers' array

    'Gvlatko\LaravelXss\LaravelXssServiceProvider'

and add the alies also in the app.php config file in the 'aliases' array

    'Xss'			  => 'Gvlatko\LaravelXss\LaravelXssFacade'


Usage
-----

Use the Xss::clean($str, $is_image = FALSE) to clean user input. For example:

    $cleaned = Xss::clean(Input::get('comment');

or for use with images

    $cleaned = Xss::clean(Input::file('profile'), TRUE);
