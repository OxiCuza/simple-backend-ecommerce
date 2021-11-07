# SIMPLE BACKEND ECOMMERCE

## Setup

Before taking this action please install composer and newest php7.

1. Make sure to pull latest update of application
```bash
git pull
```
2. Install composer dependencies
```bash
composer install
```
3. Copy **.env.example** as **.env**
```bash
cp .env.example .env // or just copy manually via file manager don't forget to edit database configuration
```
4. Generate Key PHP
```bash
php artisan key:generate
```
5. Migrate Latest Database and Seeding
```bash
php artisan migrate --seed
```
6. Install or Update NPM Dependencies
```bash
npm install
```
7. Update SCSS or JS
```bash
npm run dev
```
8. Run laravel
```bash
php artisan serve
```
