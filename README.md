# laravel_sandbox

## Dependencies

- Composer PHP OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
- MySql >= 8.0

### Laravel

- Version >= 5.7
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
