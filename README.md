# Slim-Boilerplate

Slim-Boilerplate is a bundling of the following components. It can be used as a starting point for small projects.

## Installation

Install composer in your project:

```
curl -s https://getcomposer.org/installer | php
```

Create a composer.json file in your project root:

```
{
    "require": {
        "php": ">=5.3.7",
    },
    "require-dev": {
        "slim/slim": "2.*",
        "j4mie/idiorm": "1.4.*",
        "fabpot/Twig": "1.15.*",
        "twbs/bootstrap": "3.0.*",
    },
}
```

(*Please check Packagist for the [most recent version of Slim Auth][6]*)

Install via composer:

```
php composer.phar install
```

Add this line to your application’s index.php file:

```
<?php
require 'vendor/autoload.php';
```

* __Fork__: https://github.com/PastorBones/Slim-Boilerplate
* __Model__: ORM ([idiorm & Paris](http://j4mie.github.io/idiormandparis/))
* __View__: Twig 1.11.1 ([fabpot/Twig](https://github.com/fabpot/Twig))
* __Controller__: Slim 2.0 ([codeguy/Slim](https://github.com/codeguy/Slim))
* __Styling__: bootstrap ([twbs/bootstrap](https://github.com/twbs/bootstrap))
