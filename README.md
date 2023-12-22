## Esercizio di oggi: LARAVEL-MODEL-CONTROLLER

## nome repo: laravel-model-controller

Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
1. Create un nuovo progetto Laravel 9 (dal template)
2. se  lo avete già va benissimo il nostro shop_db se no tramite phpMyAdmin create un nuovo database laravel_model_controller
3. solo se non avete già il db  Importate nel vostro database la tabella movies in allegato
4. inserite le vostre credenziali per il database nel file .env
5. Create un model Movie es. php artisan make:model Movie
6. Create la rotta e un controller che gestirà la rotta / (home) e uno per i libri es. php artisan make:controller  PageController
7. All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
8. Stilare il layout nei dettagli con Sass

## BONUS:
Creare rotta, link, aggiungere metodo show al controller, e pagina di dettaglio del movie


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installazione Laravel

```bash
cd name_project
composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here
cd your name project
code . -r
php artisan serve
ctrl + C

```
## Configurazione Laravel

```bash
composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap
npm install
npm install --save @fortawesome/fontawesome-free
## in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

## copio la cartella dei webfont e la metto in resources

##  importo in app.scss 
$fa-font-path: "../webfonts" !default;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";
```
