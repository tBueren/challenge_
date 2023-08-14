## Prerequisits with Docker
 - Docker [Docs](https://docs.docker.com/engine/install/)
 - Docker compose [Docs](https://docs.docker.com/compose/install/) 
 - Composer [Docs](https://getcomposer.org/) 

## Setup with docker
Checkout the makefile for quick and useful docker-compose commands.

If you start the project for the first time here are the steps to get it running:
```bash
    composer install
    make build
    make up
    make cli
    php artisan migrate
    php artisan db:seed
```

## Starting Point
This is a Laravel Project.  [Docs](https://laravel.com/docs/10.x/readme)
Checkout: 
`routes/web.php` for routes
`app/Http/Controllers` for controllers 
`resources/views` for views

## DB Schema
```
CREATE TABLE `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taste_id` int unsigned NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_taste_id_foreign` (`taste_id`),
  CONSTRAINT `products_taste_id_foreign` FOREIGN KEY (`taste_id`) REFERENCES `tastes` (`id`)
)

CREATE TABLE `tastes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tastes_key_unique` (`key`),
  KEY `tastes_key_id_index` (`key`,`id`)
) 
```

## Todos
 - remove unused laravel packages and configs
