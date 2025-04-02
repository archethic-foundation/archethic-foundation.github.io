# Archethic Website

A **Laravel**-based web application for the [Archethic Foundation](https://archethic.net). This project uses **PHP 8.3**, **Laravel**, and **Node.js** (with **Vite**) to deliver a
modern development experience. Whether you’re contributing to the codebase or deploying it for production, this guide will help you get started.

## Table of Contents

1. [Prerequisites](#prerequisites)
2. [Installation](#installation)
3. [Configuration](#configuration)
4. [Running the Application](#running-the-application)
5. [Running Tests](#running-tests)
6. [Deploying production](#deploying-production)
7. [Docker (Optional)](#docker-optional)
8. [License](#license)

---

## Prerequisites

- **PHP 8.3**
- **Composer**
- **Node.js** (latest LTS preferred)
- **npm** or **yarn**
- **MySQL** or **SQLite** (or any other database supported by Laravel)

> **Note**: If you don’t have all these installed locally, you can skip manual setup and use the optional Docker configuration described in [Docker (Optional)](#docker-optional).

---

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/archethic-foundation/archethic-laravel.git
    cd archethic-laravel
    ```

2. **Install PHP dependencies**:
    ```bash
    composer install
    ```

3. **Install JavaScript dependencies**:
    ```bash
    npm install
    ```
   > Or if you prefer yarn:
   > ```bash
    > yarn
    > ```

4. **Copy the example environment file and configure it**:
    ```bash
    cp .env.example .env
    ```
    - **Database**: Set your database credentials in the `.env` file.
    - **App URL**: Update `APP_URL` to match your local environment (e.g. `http://localhost:8000`).
    - **Other settings**: Configure mail, caching, etc., as needed.

5. **Generate the application key**:
    ```bash
    php artisan key:generate
    ```

6. **Run database migrations**:
    ```bash
    php artisan migrate
    ```
   If you are using SQLite, just ensure you have a `database/database.sqlite` file and update your `.env` accordingly.

---

## Configuration

- **Environment Variables**: All major settings (database, caching, mail, etc.) are controlled via `.env`. For production, be sure to set `APP_ENV=production`, `APP_DEBUG=false`,
  and secure any other sensitive values.
- **Logging**: Laravel logs to `storage/logs` by default. Check your `.env` for log settings (e.g., `LOG_CHANNEL`).

---

## Running the Application

1. **Start the Laravel development server**:
    ```bash
    composer run dev
    ```
   By default, this will serve your application at `http://127.0.0.1:8000`.

---

## Docker (Optional)

If you prefer running everything in Docker containers, we have a **Docker Compose** setup that handles PHP, queue workers, the scheduler, and more. This ensures a consistent
environment for all developers and simplifies deployment.

1. **Install Docker** and **Docker Compose** (MacOS users: **[OrbStack](https://OrbStack.dev)** is the way)
2. **Copy or adapt the `docker-compose.dev.yml`** from the repository.
3. **Build and start containers**:
    ```bash
    docker-compose -f docker-compose.dev.yml up -d
    ```

---

## Running Tests

1. **Run static analysis (PHPStan)**:
    ```bash
    ./vendor/bin/phpstan analyse --memory-limit=2G
    ```
2. **Run automated tests (Pest)**:
    ```bash
    php artisan test
    ```
   This will execute your unit and feature tests, providing a summary of the results.

---

## Deploying production

Website has been hitorically created with Laravel 11. 
For hosting simplicity, we convert it to a static website before publishing it to GitHub Pages.

To deploy, simply push your changes to the `main` branch. This will trigger the deploy GitHub Action.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

---

### Questions or Feedback?

- **Website**: [archethic.net](https://archethic.net)
- **GitHub Issues**: Please open a ticket if you spot a bug or want to request a feature.
- **Pull Requests**: Contributions are welcome! Fork this repo, make your changes, and submit a PR.

Happy coding!
