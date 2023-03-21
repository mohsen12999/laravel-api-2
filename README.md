# Laravel API

## steps

- install Xampp.
- install composer.
- install laravel => `composer global require laravel/installer`.
- make laravel projects => `laravel new laravel-api`.
- make database in PHPMyAdmin.
- make models:
  - customers: `php artisan make:model Customer --all`.
  - invoice: `php artisan make:model Customer --all`.
- run migration with seeding: `php artisan migrate:fresh --seed`

## Reference

- [How to Build a REST API With Laravel: PHP Full Course](https://www.youtube.com/watch?v=YGqCZjdgJJk&t=170s)
