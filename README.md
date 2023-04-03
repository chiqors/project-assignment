# Project Setup Guide

## Project Requirements
- Operating System: Windows (for the written instructions)
- Composer installed in PHP 8
- Node v16+ installed

## Project Setup
1. Clone the project repository or download the project folder.
2. Install and setup composer library in Powershell using the command `composer dump-autoload`.
3. Install NPM Package in Powershell using the command `npm install`.
4. Create a `.env` file from the modified `.env.example` file.
5. Fill in and adjust the information on the location of the MySQL database in the `.env` file.
6. Start the frontend server with the command `npm run dev`.
7. Start the backend server with the command `php artisan serve`.

Note: You may also import the MySQL database file (`db_project_chiqo.sql`) or use Laravel migration.

## How to Use the Website:
- You can register directly on the UI Register (URL /register).
- Input your email and password to log in (URL /login).
- Access the main page at (URL /).

## Backend Technology:
- Laravel 9 Framework (PHP)
- Laravel Fortify
- Laravel Passport
- Inertia Server-side
- Ziggy (Laravel Routing for frontend)
- MySQL Database

## Frontend Technology:
- Inertia Client-side
- Vue.js 3
- TailwindCSS
- Datatables (buttons, select, vue3)
- Vue-tailwind-datepicker

## Infrastructure:
Monolith
