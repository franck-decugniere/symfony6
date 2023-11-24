# Dev Environment setup

> Download

- XAMPP (apache, mariadb, php, perl)
- Composer (getcomposer.org)
- Symfony CLI (symfony.com/download)

> Usefull VSCode extension
- PHP Intelephense
- Twig

> Symfony Components

https://symfony.com/components  
https://packagist.org

> Create Symfony project from scratch 

symfony new projectDir --version="6.3.*" --webapp mar

> Create Symfony project from existing source

cd projectDir   
composer install

> Display information about project

php bin/console about  
php bin/console list make

> Local dev server  

symfony server:start

> Add Symfony Profiler feature

composer require --dev symfony/profiler-pack  
composer require --dev symfony/maker-bundle

# Route 
> via annotation

php bin/console debug:route   
composer require doctrine/annotations

# Form

composer require symfony/form  
php bin/console make:entity  
php bin/console make:form

# Doctrine

composer require doctrine/orm -W  
composer require orm  
php bin/console doctrine:database:create  
php bin/console make:migration  
php bin/console doctrine:migrations:migrate

# Container de service (autowiring)

> List available service

php bin/console debug:autowiring

> URL generation & versioning of web assets

composer require symfony/asset

# Twig
Template engine used by Symfony.
Not mandatory, can use other engine (Smarty, ...)

> Syntax

{{....}} : display variable  
{%....%} : code declaration  
{#...#} : comment  
{...|...} : filter
