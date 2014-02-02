<?php
// Translation with gettext
putenv('LC_ALL=' . $locality);

if (defined('LC_MESSAGES'))
{
    /**
* Set the specific locale information we want to change. We could also
* use LC_MESSAGES, but because we may want to use other locale information
* for things like number separators, currency signs, we'll say all locale
* information should be updated.
*
* The second parameter is the locale and encoding you want to use. You
* will need this locale and encoding installed on your system before you
* can use it.
*
* On an Ubuntu/Debian system, adding a new locale is simple.
*
* $ sudo apt-get install language-pack-de # German
* $ sudo apt-get install language-pack-ja # Japanese
*
* You can also generate a specific locale using locale-gen.
*
* $ sudo locale-gen en_US.UTF-8
* $ sudo locale-gen de_DE.UTF-8
*/
    setlocale(LC_MESSAGES, $locality); // Linux
    // Specify the location of the translation tables
	bindtextdomain('default', APP_PATH . 'i18n');
	bind_textdomain_codeset('default', 'UTF-8');
	// Choose domain
	textdomain('default');
}
else
{
    putenv("LC_ALL={$locality}"); // windows
}

if (false === function_exists('gettext'))
{
    echo "You do not have the gettext library installed with PHP.";
    exit(1);
}