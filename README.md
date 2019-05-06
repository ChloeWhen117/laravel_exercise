# laravel_sandbox
To-do-list manager where users can create and maintain a list of projects. Each project has a title, description, and list of tasks to do. 

## Dependencies

- Composer PHP OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
- MySql >= 8.0

### Laravel

- Version >= 5.8
- Should be running on `http://127.0.0.1:8000/` 

## Installing App
Install dependencies with composer.
```
composer install
composer run-script post-root-package-install
```

## Running App

```
php artisan migrate
php artisan serve
```
