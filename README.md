# Aplikasi Manajemen Produk & Penjualan - Laravel

Aplikasi berbasis Laravel untuk mengelola data **produk**, **penjualan**, dan membuat **laporan** penjualan secara dinamis. Dilengkapi dengan fitur CRUD dan autentikasi pengguna.

## 🎯 Fitur

- CRUD Produk
- CRUD Penjualan
- Laporan Penjualan
- Autentikasi (Login/Register)
- Dashboard Statistik

## 🧰 Teknologi yang Digunakan

- Laravel 10.x
- PHP >= 8.1
- MySQL / MariaDB
- TailwindCSS / Bootstrap (pilih salah satu)
- Laravel Breeze / Jetstream (jika menggunakan auth bawaan)
- Composer & NPM

## ⚙️ Kebutuhan Sistem

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL / MariaDB
- Web Server (Apache/Nginx)
- Laravel CLI

## 🚀 Instalasi

1. **Clone repositori:**

   ```bash
   git clone https://github.com/username/laravel-penjualan.git
   cd laravel-penjualan
   ```

2. **Install dependensi Laravel:**

   ```bash
   composer install
   ```

3. **Install dependensi frontend:**

   ```bash
   npm install
   ```

4. **Salin file `.env` dan generate app key:**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi database di file `.env`:**

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_penjualan
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Jalankan migrasi dan seeder:**

   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan aplikasi:**

   ```bash
   php artisan serve
   ```

8. **(Opsional) Compile assets frontend:**

   ```bash
   npm run dev
   ```

## 🗂️ Struktur Fitur

```
├── app/Http/Controllers/
│   ├── ProdukController.php
│   ├── PenjualanController.php
│   └── LaporanController.php
├── app/Models/
│   ├── Produk.php
│   └── Penjualan.php
├── resources/views/
│   ├── produk/
│   ├── penjualan/
│   └── laporan/
├── routes/
│   └── web.php
```

## 🧪 Testing

```bash
php artisan test
```

## 🤝 Kontribusi

Pull request dan issue sangat diterima. Silakan buat branch baru dan jelaskan perubahan yang dilakukan.

## 📄 Lisensi

[MIT License](LICENSE)
