![passwordnya](https://user-images.githubusercontent.com/59151948/116514058-10624500-a8fd-11eb-9030-c052673a3634.png)

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Passwordnya

Passwordnya is designed to facilitate local password management. Of course it is open source and can be expanded again.

- [Open Source] Clone Repo and Install 
- [Encode Now] with various types of encoding namely base64 and sha256
- [Plug n Play] Easy to transfer to other machines and short operation


## Installation
1. Clone this project
    ```bash
    git clone https://github.com/laughface809/Passwordnya
    cd Passwordnya
    ```
2. Install dependencies
    ```bash
    composer install
    ```
    And javascript dependencies
    ```bash
    yarn install && yarn dev

    #OR

    npm install && npm run dev
    ```

3. Set up Laravel configurations
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Set your database in .env

5. Migrate database
    ```bash
    php artisan migrate
    ```

6. Serve the application
    ```bash
    php artisan serve
    ```

## Contributing
Feel free to contribute and make a pull request.
