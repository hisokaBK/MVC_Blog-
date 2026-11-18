# MVC Blog — PHP Web Application

A custom PHP MVC blog application with article publishing, categories, comments, reactions, and role-specific pages.

## Implemented modules visible in the routes

- Authentication, registration, login, logout and profile.
- Article listing, creation, editing and deletion.
- Individual article pages.
- Categories management.
- Article likes, comment likes and comments.
- Author and admin dashboards.
- User/content moderation routes.

## Architecture

The application uses a custom `Router` and PSR-style autoload/bootstrap structure. Its models cover `User`, `Article`, `Category`, `Comment`, `Like`, `Admin`, `Author`, `Reader` and moderation entities.

## Technologies

PHP, custom MVC routing, database-backed models, HTML/CSS and Tailwind CSS.

## Repository structure

- `public/index.php` — front controller and route declarations.
- `app/controllers/` — request handlers.
- `app/models/` — domain/data classes.
- `app/core/` — framework-like components.
- `app/views/` — templates.
- `bootstrap/` — autoloading.
- `config/`, `mySQL/` — database/configuration files.
- `UML/` — diagrams.

## Running locally

Point an Apache/PHP web server at `public/` and enable URL rewriting if required by `.htaccess`. Configure your local database using the project's configuration/schema files. Frontend dependencies can be installed using `npm install` when needed.

**Security note:** The repository may include sample environment configuration. Always use your own local credentials and do not publish secrets.
