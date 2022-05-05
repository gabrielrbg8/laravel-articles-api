# Articles API
###### _In this app you can create a user, log in and enjoy a CRUD of Articles. Following the best programming practices, you will be able to create, retrieve, with and without filters, the Articles that come from the "Space Flight News" api._

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

To create it, we use:

- :elephant: Laravel 7 :elephant:
- :dolphin: MySQL :dolphin:
- :whale: Docker :whale:
- :chart: TDD :chart:

## Get Started

- Make a git clone of the project
- Up the containers in Docker with:
   ```sh
        docker-compose up -d --build
   ```
- Rename .env.example file to .env
- Run the following commands from a terminal:
    ```sh
         docker-compose restart
         docker-compose exec app composer install
         docker-compose exec app php artisan key:generate
         docker-compose exec app php artisan jwt:secret
         docker-compose exec app php artisan migrate:fresh
         docker-compose exec app php artisan apidoc:generate
    ```
        A new php development server will be started in: localhost:8000
        Can you authenticate with email and password (make an signup before, according with API documentation)
        To view API documentation, access: localhost:8000/doc (maybe necessary clean the navigator cache)
        To run the script to fill the Article's table with Space Flight News data, run on terminal:
                    docker-compose exec app php artisan articles:fill
        To run the tests, you maybe the SQLite in your PC. Made it, run on terminal:
                    php artisan test

## External packages and services

This project is currently extended with the following packages and services.
Instructions on how to use them in your own app are linked below.

| Plugin | Doc |
| ------ | ------ |
| JWT | https://jwt-auth.readthedocs.io/en/develop/ |
| Laravel API Doc Generator | https://beyondco.de/docs/laravel-apidoc-generator/getting-started/installation |
| EloquentFilter | https://github.com/Tucker-Eric/EloquentFilter |
| Laravel Fractal | https://fractal.thephpleague.com/ |

## Development

#### Want to contribute? Great!

This project can grow even more with your contribution! 
Suggestions are always welcome!


## License

MIT

**Free Software, Hell Yeah!**
