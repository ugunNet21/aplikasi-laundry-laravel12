# Laundry Management System

![Admin Dashboard](/public/admin/images/image.png)

## Tentang Project

Sistem Manajemen Laundry ini dibangun dengan Laravel 12 untuk membantu usaha laundry dalam mengelola transaksi, pelanggan, dan inventaris. Sistem ini menyediakan antarmuka admin yang user-friendly dan fitur lengkap untuk operasional laundry.

## Fitur Utama

- Manajemen Pelanggan
- Transaksi Laundry (Cuci, Setrika, Dry Cleaning)
- Tracking Order
- Laporan Keuangan
- Manajemen Karyawan
- Sistem Notifikasi

## Persyaratan Sistem

- PHP 8.1+
- Composer
- Node.js 16+
- MySQL 5.7+ atau MariaDB 10.3+

## Instalasi

1. Clone repository:
```bash
git clone https://github.com/ugunNet21/aplikasi-laundry-laravel12.git
cd aplikasi-laundry-laravel12

```

2. Install Dependencies

```bash
composer install
npm install

```

3. Buat .env

````
cp .env.example .env

````

4. Generate key

````
php artisan key:generate

````

5. konfigurasi database

````
DB_DATABASE=laundry_db
DB_USERNAME=root
DB_PASSWORD=

````
6. Jalankan migrasi dan seeder

````
php artisan migrate --seed

````

````
Akses aplikasi di: http://localhost:8000

Login Default
Admin:

Email: admin@laundry.com

Password: password

Karyawan:

Email: karyawan@laundry.com

Password: password

Package yang Digunakan
Laravel Breeze (Authentication)

Laravel Excel (Export/Import)

Spatie Laravel Permission (Role Management)

DomPDF (Report Generation)

Kontribusi
Fork project ini

Buat branch fitur baru (git checkout -b fitur-baru)

Commit perubahan (git commit -m 'Menambahkan fitur baru')

Push ke branch (git push origin fitur-baru)

Buat Pull Request

````