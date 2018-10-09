# JSD Comments 
#### Laravel commenting system

[![Build Status](https://travis-ci.org/jsdecena/comments.svg?branch=master)](https://travis-ci.org/jsdecena/comments)
[![Latest Stable Version](https://poser.pugx.org/jsdecena/comments/v/stable)](https://packagist.org/packages/jsdecena/comments)
[![Total Downloads](https://poser.pugx.org/jsdecena/comments/downloads)](https://packagist.org/packages/jsdecena/comments)
[![License](https://poser.pugx.org/jsdecena/comments/license)](https://packagist.org/packages/jsdecena/comments)

## How to install

- Run in your terminal `composer require jsdecena/comments`

- Add the base service provider in your `config/app.php` file like this:

```php
    'providers' => [

        /*
         * Package Service Providers...
         */
        Jsdecena\Comments\CommentServiceProvider::class,
    ],
```

- Publish files
```php
php artisan vendor:publish
```

- Edit config. Make sure your user is correctly referenced. Commentable type could be any Model (eg. Post). This is only used in initial seeding.
```php
<?php

return [
    'user' => 'App\User',
    'commentable_type' => 'App\User'
];
```

- Migrate database
```php
php artisan migrate
```

# Author

[Jeff Simons Decena](https://jsdecena.me)
