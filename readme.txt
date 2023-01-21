Kebutuhan Project:
- Operating System (Windows, untuk instruksi yang ditulis)
- Composer terinstall di PHP 8 (ini yang digunakan)
- Node v16+ terinstall

Setup Project:
1. Clone Repository / Download folder project ini
2. Install & Setup composer library di Powershell dengan command `composer dump-autoload`
3. Install NPM Package di Powershell dengan command `npm install`
4. Buat file .env dari file .env.example yang sudah dimodifikasi
5. Isi dan sesuaikan informasi lokasi mysql database di file .env
6. Start server frontend dengan command `npm run dev`
7. Start server backend dengan command `php artisan serve`

(Optional) import file db mysql (db_project_chiqo.sql) atau gunakan laravel migration.

Cara Penggunaan Website:
- Bisa langsung daftar di UI Register (URL /register)
- Yang diinputkan untuk login: email dan password (URL /login)
- Tampilan Utama (URL /)

Teknologi yang dipakai untuk backend:
Laravel 9 Framework (PHP)
Laravel Fortify
Laravel Passport
Inertia Server-side
Ziggy (Laravel Routing for frontend)
MySQL Database

Teknologi yang dipakai untuk frontend:
Inertia Client-side
Vue.js 3
TailwindCSS
datatables (buttons, select, vue3)
vue-tailwind-datepicker

Infrastruktur: Monolith