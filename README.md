# POS Foundations TFA2

A database-backed CodeIgniter 4 Point-of-Sale foundation created for IT0049 Technical Formative Assessment 2.

## Requirements completed

- MySQL database connection configured through `.env`
- `customers` and `users` tables match the supplied schema
- Five sample records in each table
- `CustomerModel` and `UserModel`
- Controllers retrieve records through their models with `findAll()`
- Views display database records with `foreach`
- Database export included at `database/pos_database.sql`
- CodeIgniter migrations and a seeder included for reproducible setup

## Requirements

- PHP 8.2 or newer
- Composer 2
- MySQL or MariaDB, such as the MySQL server included with XAMPP
- PHP extensions `intl`, `mbstring`, and `mysqli`

## Quick setup with XAMPP and phpMyAdmin

1. Extract or clone the project.
2. Start Apache and MySQL in the XAMPP Control Panel.
3. Open `http://localhost/phpmyadmin`.
4. Select **Import** and choose `database/pos_database.sql`.
5. Copy `env` to `.env` if `.env` is not already present.
6. Confirm the database values in `.env`:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = pos_database
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

7. Restore dependencies if `vendor` is absent:

```powershell
composer install
```

8. Start the application:

```powershell
php spark serve
```

9. Open `http://localhost:8080/`.

## Alternative setup with migrations

Create an empty database named `pos_database`, configure `.env`, and run:

```powershell
php spark migrate
php spark db:seed PosSeeder
php spark serve
```

## Routes

- `/` - landing page
- `/about` - project information
- `/customers` - customers retrieved through `CustomerModel`
- `/users` - users retrieved through `UserModel`

Display the route table with:

```powershell
php spark routes
```

## Automated tests

The tests use an in-memory SQLite database and do not alter local MySQL data.
Enable PHP's `sqlite3` extension before running them.

```powershell
vendor\bin\phpunit --no-coverage
```

## Project structure

```text
app/
  Config/Routes.php
  Controllers/Pages.php
  Controllers/Customers.php
  Controllers/Users.php
  Models/CustomerModel.php
  Models/UserModel.php
  Database/Migrations/2026-10-09-120000_CreatePosTables.php
  Database/Seeds/PosSeeder.php
  Views/layout.php
  Views/pages/home.php
  Views/pages/about.php
  Views/customers/index.php
  Views/users/index.php
database/
  pos_database.sql
public/
  css/app.css
```

## GitHub notes

The project `.gitignore` excludes `.env` and `vendor`. This is standard Composer practice. The tracked `env` template contains safe local defaults, and the README explains how to create `.env`. The required database export is tracked in the `database` directory.

## Hosting notes

1. Use hosting with PHP 8.2+, MySQL, and the required PHP extensions.
2. Point the website document root to the project's `public` directory.
3. Run `composer install --no-dev`.
4. Import `database/pos_database.sql` into the hosted MySQL database.
5. Create a production `.env` with the host's database credentials.
6. Set `CI_ENVIRONMENT = production` and `app.baseURL` to the final HTTPS URL.
7. Make `writable` writable by the web server.
