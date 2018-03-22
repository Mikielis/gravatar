# Gravatar for Laravel 5


# Installation

Pull in the package through Composer:

```php
composer require --save mikielis/gravatar ~1.0
```

Or you can add the following to your composer.json file and then run command: `composer update`.

```js
"require": {
    "mikielis/gravatar": "~1.0"
}
```


Include the service provider withing `config/app.php`.
That's the method for Laravel 5.4 and greater.

```php
'providers' => [
    Mikielis\Gravatar\GravatarServiceProvider::class
];
```

To use the facade, add the facade alias to  `config/app.php`:

```php
'aliases' => [
    'Gravatar' => Mikielis\Gravatar\Facades\Gravatar::class,
];
```




# Usage

Get gravatar URL Within your controllers or views in this way:

```php
    Gravatar::getUrl('email@example.com');
```

If you want to specify a size of gravatar, do it passing second argument (integer):

```php
    Gravatar::getUrl('email@example.com', 100);
```

If you want to get gravatars for more than one email address, you can do it in the following way (passing array):

```php
    Gravatar::getUrls(['email@example.com', 'email2@example.com', 'email3@example.com']);
```

You can still specify your expected size in this way:

 ```php
     Gravatar::getUrls(['email@example.com', 'email2@example.com', 'email3@example.com'], 60);
 ```

 When preferred size is not specified, default size of gravatar is set to 80.


