# Dev Environment setup
<!-- Download -->
- XAMPP (apache, mariadb, php, perl)
- Composer (getcomposer.org)
- Symfony CLI (symfony.com/download)
    - scoop install symfony-cli

- Usefull VSCode extension
  - PHP Intelephense
  - Twig

- Composer repo : https://packagist.org


<!-- Create Symfony project from scratch --> 
symfony new projectDir --version="6.3.*" --webapp mar

<!-- Create Symfony project from existing source -->
cd projectDir
composer install

<!-- Display information about project -->
php bin/console about

<!-- Local dev server -->
symfony server:start

<!-- Add Symfony Profiler feature -->
composer require --dev symfony/profiler-pack

<!-- Route via annotation -->
composer require doctrine/annotations

# Twig
Template engine used by Symfony.
Not mandatory, can use other engine (Smarty, ...)

## Syntax
{{....}} : display variable
{%....%} : code declaration
{#...#} : comment
{...|...} : filter
