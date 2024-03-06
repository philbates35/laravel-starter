## Laravel starter

This is a modern, strict, strongly typed Laravel application skeleton that can be used to start new projects.

## System requirements

You should ensure that you have the following installed on your host machine:

* Git
* Docker
* Docker-compose
* pnpm v8

That's it!

### Why isn't Node a system requirement?

We use pnpm's `use-node-version` in `.npmrc` to manage the node version to use in the project, which means that you don't need a locally installed Node. This way we can ensure that all developers are using the same version of Node.

## The Stack

PHP and webserver:
* Dockerized [Laravel Octane](https://laravel.com/docs/10.x/octane) with [FrankenPHP](https://frankenphp.dev) for lightning fast response times and HTTPS local development environment
* PHP 8.3

Back end:
* Laravel 10
* PHPStan (& Larastan) set to the highest level, as well as phpstan/phpstan-strict-rules for extra strictness
* PHPUnit 10
* Rector
* PHP CS Fixer configured to use the latest PER coding standards
* PHP_CodeSniffer configured to use the latest PSR12 coding standards

Front end:
* pnpm
* Node 20 (LTS)
* TypeScript
* Vite 5 (with Laravel plugin)
* Vitest
* Prettier
* ESLint

## Getting started

1. Clone this repo:
   ```shell
   git clone git@github.com:philbates35/laravel-starter.git example-project
   cd example-project
   rm -rf .git/
   ```

2. Create the `.env` file:
   ```shell
   cp .env.example .env
   ```

3. Install composer dependencies, then start Octane (FrankenPHP):
    ```shell
    docker-compose up -d
    ```

4. Generate application key:
   ```shell
   docker-compose exec php php artisan key:generate
    ```

5. Install front end dependencies:
    ```shell
    pnpm install
    ```

6. Run the Vite dev server:

    ```shell
    pnpm run dev
    ```

7. Go to https://localhost/, accept the potential security risk (it's a self-signed certificate), and you should see the Laravel welcome page.

## Cheat sheet

Back end:

```shell
# Use composer
docker-compose exec php composer install
docker-compose exec php composer update
docker-compose exec php composer require --dev foo/bar

# Run tests
docker-compose exec php composer run test

# Run phpstan
docker-compose exec php composer run phpstan

# Run php-cs-fixer
docker-compose exec php composer run php-cs-fixer

# Run phpcs
docker-compose exec php composer run phpcs
```

Front end:

```shell
# Run the Vite dev server
pnpm run dev

# Run tsc & build assets for production
pnpm run build

# Run tests
pnpm run test

# Run tests with coverage report, output at coverage/
pnpm run coverage

# Run eslint
pnpm run lint

# Run prettier
pnpm run format

# Run prettier with --check (used in CI only)
pnpm run format-check
```
