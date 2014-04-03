# Simple Slim Application Template

This application isn't a *real* application, so much as a template for starting with Slim

## Dependencies

Given that we're using Slim, we have some Slim-related dependencies.

* [Slim Framework](http://www.slimframework.com/) - PHP micro framework to manage backend routes etc. Kind of obvious, but just being explicit.
* [Slim Views](https://github.com/codeguy/Slim-Views) - Officially supported View classes for Slim.
* [Twig](http://twig.sensiolabs.org/) - Officially supported template engine for use by Slim Views. I prefer this to Smarty but you can use either.

These dependencies are all managed via [Composer](https://getcomposer.org/), but they've also been checked into the repository directly, so Composer is not necessary to get started. Composer is the tool of choice for dependency management in PHP these days, and it's quite easy to use.

## Development

Doing local development is quite simple. If you wish to use Vagrant to do development, it's supported. In order to get started with this vagrantfile, you'll need the following:

* [Vagrant](http://www.vagrantup.com/) (1.4.3 at the time of this writing, 1.4 at a minimum)
* [VirtualBox](https://www.virtualbox.org/) (4.3.6 at the time of this writing, 4.3 at a minimum)

Once those are installed, getting started is simple:

* Open up a shell in this directory
* Run `vagrant up`
* Go do something else for half an hour while the VM goes through comprehensive provisioning and software install, including database configuration

The Vagrant image in use is currently Debian Wheezy 7.2 x64 built for VirtualBox 4.3. The full configuration of Vagrant and all software that VM provisioning installs is courtesy of [PuPHPet](https://puphpet.com/). Details can be found in our `config.yaml` but the key pieces:

* Apache 2.0
* PHP 5.5
* XDebug for PHP
* MySQL 5.5
* Composer, installed globally

That being said, our minimum requirements are PHP 5.3 and MySQL 5.4.

## Deploying elsewhere

If you wish to deploy this application to a server, there's a few steps:

* The root directory of the virtual host that gets created should be pointed at the `public` directory.
* Assuming you're using a database, you'll need to update the credentials in `app/config/pdo.php`

## Resources

* [Slim Framework Docs](http://docs.slimframework.com/)
* [Twig for Template Designers](http://twig.sensiolabs.org/doc/templates.html)
* [PDO](http://us2.php.net/manual/en/book.pdo.php)
