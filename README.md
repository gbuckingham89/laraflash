# gbuckingham89/laraflash v3.2.0

A simple package for handling flash messages / notifications in Laravel. Written to suit my needs - but hopefully someone else will find it useful too.

The current version requires Laravel 5.6 (PHP 7.1) or greater. [Version 2.0.0](https://github.com/gbuckingham89/laraflash/tree/2.0.0) supports earlier 5.* versions. The levels of priority for messages and included view file are optimised for use with [Bootstrap 3](http://www.getbootstrap.com).

## Installation

The recommended way is using [Composer](https://getcomposer.org) - simply run this command in your terminal:

	composer require gbuckingham89/laraflash

The service provider and facade will be automatically registered for you unless you have disabled auto discovery. If this is the case, you'll need to manually register the service provider and facade:

For the service provider, add the following to the `providers` array in your `app.php` config file:

    Gbuckingham89\Laraflash\ServiceProvider::class

For the facade, add the following to the `aliases` array in your `app.php` config file:

    'Laraflash' => Gbuckingham89\Laraflash\Facade::class

Finally, you'll need to publish the view file (unless you want to roll your own). Do this by running this command in your terminal:

    php artisan vendor:publish --provider="Gbuckingham89\Laraflash\ServiceProvider"

## Use

### Setting a message

Before you redirect to another page, simply use the `Laraflash` facade to set your message. You can call the main `flash` method as follows:

    Laraflash::flash("This is a flash message.", "success");

The first parameter is your message, the second is the priority level.

There are also four helper methods available for easier setting of priority levels:

    Laraflash::success("This is a success flash message.");

    Laraflash::info("This is an info flash message.");

    Laraflash::warning("This is a warning flash message.");

    Laraflash::danger("This is a danger flash message.");

### Displaying the message

To display the message, simply include the bundled view (built for Bootstrap) in your view:

    @include('laraflash::laraflash')

Alternatively, you can access the data in the session directly (stored in `laraflash.message` and `laraflash.level`) and roll your own view.

## Copyright and license

Code and documentation copyright [George Buckingham](https://www.georgebuckingham.com).

Code released under the [MIT License](https://github.com/gbuckingham89/laraflash/blob/master/LICENSE).