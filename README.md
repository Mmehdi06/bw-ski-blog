# Laravel Application Setup Guide

Follow these steps to set up and run the Laravel application locally.

## Prerequisites

- PHP (>= 7.4 recommended)
- Composer (https://getcomposer.org/)
- Node.js and npm (https://nodejs.org/)

## Installation Steps

1. **Install PHP Dependencies:**
   ```bash
   composer install
   ```


2. **Install NPM Dependencies:**
    ```bash
    npm install
    ```

3. **Run Database Migrations and Seed Data:**
   ```bash
   php artisan migrate:fresh --seed
   ```

4. **Create Symbolic Link for Storage:**
   ```bash
   php artisan storage:link
   ```

5. **Compile Frontend Assets (if applicable):**
   ```bash
   npm run dev
   ```

6. **Start the Laravel Development Server:**
   ```bash
   php artisan serve
   ```

   Access your Laravel application at http://localhost:8000 in your web browser.
