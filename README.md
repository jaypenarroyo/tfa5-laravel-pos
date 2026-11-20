# TFA5 Laravel POS Foundations

This project rebuilds the four-page TFA1 POS application in Laravel. It contains a landing page, an about page, a Customer Accounts page, and a User Accounts page. The two account pages receive static PHP arrays from their controllers and render the records with Blade `@foreach` loops.

## Requirements

- PHP 8.2 or later
- Composer 2
- Git
- Visual Studio Code

## Run the project locally

1. Open the project folder in Visual Studio Code.
2. Open **Terminal > New Terminal**.
3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create the local environment file:

   **Windows PowerShell**

   ```powershell
   Copy-Item .env.example .env
   ```

   **macOS or Linux**

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Start Laravel:

   ```bash
   php artisan serve
   ```

7. Open `http://127.0.0.1:8000` and test `/`, `/about`, `/customers`, and `/users`.

The visible customer and user lists use static arrays, so the four pages do not require a database. Migration and seeder files are included for the submission requirement and future database work.

## Optional database setup

The default `.env.example` uses SQLite. Create `database/database.sqlite`, then run:

```bash
php artisan migrate --seed
```

## Project structure

- `routes/web.php` - four named routes
- `app/Http/Controllers/PageController.php` - landing and about pages
- `app/Http/Controllers/CustomerController.php` - static customer array
- `app/Http/Controllers/UserController.php` - static user array
- `resources/views` - shared layout and four Blade pages
- `public/css/app.css` - responsive styling
- `database/migrations` and `database/seeders` - database starting point
- `tests/Feature/PosPagesTest.php` - route and content checks

## Test the project

```bash
php artisan test
```

## Upload to GitHub with Visual Studio Code

See [GITHUB_UPLOAD_GUIDE.md](GITHUB_UPLOAD_GUIDE.md) for the complete step-by-step process.
