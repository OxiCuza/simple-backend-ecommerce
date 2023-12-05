
# Simple Backend Ecommerce

Welcome to our simple backend ecommerce, where managing your products and categories has never been easier! With our easy-to-use web interface and fully documentated API, you can easily add, update, delete, and view all of your products and categories right from your favorite device. Whether you're on a desktop computer or using our native mobile app, you'll be able to access all of your data in real-time. Plus, with our custom client authentication and authorization, you can rest easy knowing your data is secure and protected.



## Tech Stack

**Client:** CoreUI, Blade Template

**Server:** PHP7, Laravel, MySQL, Node v14


## Features

- Landing Page
- Authentication
- Dashboard
- CRUD Category
- CRUD Product
- Edit / Show Profile


## Run Locally

Clone the project

```bash
  git clone https://github.com/OxiCuza/simple-backend-ecommerce.git
```

Go to the project directory

```bash
  cd simple-backend-ecommerce
```

Install composer dependencies

```bash
  composer install
```

Copy .env.example as .env
```bash
  cp .env.example .env
```

Generate key PHP
```bash
  php artisan key:generate
```

Setup database
```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1 // or using localhost
  DB_PORT=3306
  DB_DATABASE=example_database // change this value
  DB_USERNAME=example_user // change this value
  DB_PASSWORD=example_pass // change this value
```

Migrate database and seeding
```bash
  php artisan migrate --seed
```

Install NPM dependencies
```bash
  npm install
```

Start the server

```bash
  php artisan serve
```


## Screenshots

![App Screenshot](https://oxicuza.github.io/assets/img/work/work-3.png)


## Feedback

If you have any feedback, please reach out to me at oxicusa@gmail.com


## Authors

- Oxicusa Gugi H. - [@OxiCuza](https://github.com/OxiCuza)

