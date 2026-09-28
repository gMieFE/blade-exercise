# Blade Exercise

A Laravel application for practicing and experimenting with [Blade](https://laravel.com/docs/blade) templates, built on the Laravel 13 skeleton.

A small Laravel app with three Blade views: a home page with navigation links, a form that collects a first and last name, and a shopping list where users can add products, see the saved list, and delete items.

## Features

| Page | View | What it does |
| --- | --- | --- |
| Home | `app.blade.php` | Landing page with navigation links to the other pages |
| Form | `form.blade.php` | Collects a first name and last name |
| Shopping list | `shoppingList.blade.php` | Add products, view the saved list, and delete items with a delete button |

Routes in `routes/web.php` connect each page and its form submissions to the corresponding controllers.


## Tech Stack

- **PHP** ^8.3
- **Laravel** ^13.17
- **Vite** for front-end asset bundling
- **Pest** for testing
- **Laravel Pint** for code style
- **Laravel Tinker** and **Laravel Pail** for local debugging

## Requirements

- PHP 8.3 or higher
- [Composer](https://getcomposer.org/)
- Node.js and npm

## Getting Started

Clone the repository:

```bash
git clone https://github.com/gMieFE/blade-exercise.git
cd blade-exercise
```

Run the one-step setup script, which installs dependencies, creates your `.env`, generates the app key, runs migrations, and builds front-end assets:

```bash
composer run setup
```

Start the development environment:

```bash
composer run dev
```

The app will be available at the URL printed in your terminal (typically <http://localhost:8000>).

### Manual setup

If you prefer to run each step yourself:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

## Available Commands

| Command | Description |
| --- | --- |
| `composer run setup` | Full first-time project setup |
| `composer run dev` | Start the local development environment |
| `composer run test` | Clear config cache and run the test suite |
| `./vendor/bin/pint` | Format code with Laravel Pint |
| `php artisan tinker` | Open an interactive REPL |

## Project Structure

```
app/          Application code (models, controllers, providers)
bootstrap/    Framework bootstrapping and cache
config/       Configuration files
database/     Migrations, factories, and seeders
public/       Web root and compiled assets
resources/    Blade views, CSS, and JavaScript
routes/       Route definitions
storage/      Logs, cache, and compiled views
tests/        Pest test suite
```

Blade templates live in `resources/views`.

## Testing

```bash
composer run test
```

## Contributing

1. Create a feature branch: `git checkout -b feature/my-change`
2. Make your changes and add tests where relevant
3. Format your code: `./vendor/bin/pint`
4. Run the tests: `composer run test`
5. Open a pull request

## License

This project is built on the Laravel framework, which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
