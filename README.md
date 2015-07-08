# TidioChat Laravel 5 Package

TidioChat.com is an online service that allows you add a Live Chat window in your website to interact with your visitors.

This package allows you to easily integrate it to your web application with a simple blade extension.

## Installation

Add the following to your `composer.json` file :

```json
"require-dev": {
    "alariva/tidiochat": "^1.0"
},
```

Then register TidioChat's service provider with Laravel:

```php
'alariva\tidiochat\TidioChatServiceProvider',
```

Optionally, you can add the following alias to your `aliases` 
array in your `config/app.php` file. Only if you don't want to use the blade extension.

```php
'TidioChat' => 'alariva\tidiochat\TidioChat',
```

## Configuration

You will need to set your your **key** in the config file.

## Including the Live Chat widget

Call the blade directive ``@tidiochat`` before your closing ``</body>`` tag.

```php
@tidiochat
```

## Contributing

This is my very first package, and there is a lot that can be enhanced.
So feel free to suggest and help improve this package.
Fork the repo, make your changes then send a pull request on GitHub. 
