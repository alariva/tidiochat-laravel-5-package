# TidioChat Laravel 5.2 Package

TidioChat.com is an online service that allows you add a Live Chat window in 
your website to interact with your visitors.

This package allows you to easily integrate it to your web application with a 
simple call.

## Usage

To include the Live Chat widget use this code before your closing ``</body>`` tag.

```php
{!! TidioChat::js() !!}
```

## Installation

Add the following to your `composer.json` file :

```json
"require-dev": {
    "alariva/tidiochat": "^2.0"
},
```

Then register TidioChat's service provider with Laravel:

```php
Alariva\Tidiochat\TidioChatServiceProvider::class,
```

Add the following alias to your `aliases` 
array in your `config/app.php` file.

```php
'TidioChat' => Alariva\Tidiochat\Facades\TidioChat::class,
```

## Configuration

You will need to set your your **key** in the config file.

## Contributing

This is my very first package, and there is a lot that can be enhanced.
So feel free to suggest and help improve this package.
Fork the repo, make your changes then send a pull request on GitHub. 
