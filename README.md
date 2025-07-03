# Toko Online CodeIgniter 4

Proyek ini adalah platform toko online yang dibangun menggunakan [CodeIgniter 4](https://codeigniter.com/). Sistem ini menyediakan beberapa fungsionalitas untuk toko yakni sebagai berikut :

## Fitur

- Katalog Produk
  - Tampilan produk dengan gambar
  - Pencarian produk
- Keranjang Belanja
  - Tambah/hapus produk
  - Update jumlah produk
- Sistem Transaksi
  - Tampilan detail transaksi
  - Proses checkout
  - Riwayat transaksi
- Panel Admin
  - Manajemen produk (CRUD)
  - Manajemen kategori
  - Manajemen diskon (CRUD)
  - Laporan transaksi
  - Export data ke PDF
- Sistem Autentikasi
  - Login/Register pengguna
  - Manajemen akun
  - Logout
- Penerapan diskon berdasarkan tanggal (hari ini)
- UI Responsif dengan NiceAdmin template
- Intregasi dengan REST API raja ongkir
- Implementasi webservice
- Dashboard Toko

## Persyaratan Sistem

- PHP >= 8.2
- Composer
- Web server (XAMPP)

## Instalasi

1. **Clone repository ini**
   ```bash
   git clone [URL repository]
   cd 15264_belajar-ci
   ```
2. **Install dependensi**
   ```bash
   composer install
   ```
3. **Konfigurasi database**

   - Start module Apache dan MySQL pada XAMPP
   - Buat database **db_ci4** di phpmyadmin.
   - copy file .env dari tutorial https://www.notion.so/april-ns/Codeigniter4-Migration-dan-Seeding-045ffe5f44904e5c88633b2deae724d2

4. **Jalankan migrasi database**
   ```bash
   php spark migrate
   ```
5. **Seeder data**
   ```bash
   php spark db:seed ProductSeeder
   ```
   ```bash
   php spark db:seed UserSeeder
   ```
   ```bash
   php spark db:seed ProductCategorySeeder
   ```
   ```bash
   php spark db:seed DiskonSeeder
   ```
6. **Jalankan server**
   ```bash
   php spark serve
   ```
7. **Akses aplikasi**
   Buka browser dan akses `http://localhost:8080` untuk melihat aplikasi.

## Struktur Proyek

Proyek menggunakan struktur MVC CodeIgniter 4:

- app/Controllers - Logika aplikasi dan penanganan request
  - AuthController.php - Autentikasi pengguna
  - ProdukController.php - Manajemen produk
  - TransaksiController.php - Proses transaksi
  - KategoriController.php - Manajemen kategori
  - ApiController - Api transaksi
  - DiskonController - Manajemen diskon
  - TransaksiController - Manajemen transaksi dan keranjang
- app/Models - Model untuk interaksi database
  - ProductModel.php - Model produk
  - UserModel.php - Model pengguna
  - CategoryModel.php - Model kategori
  - DiskonModel.php - Model diskon
  - TransactionDetailModel.php - Model detail transaksi
  - TransactionModel.php - Model transaksi
- app/Views - Template dan komponen UI
  - v_produk.php - Halaman produk
  - v_keranjang.php - Halaman keranjang
  - v_checkout.php - Halaman checkout
  - v_diskon.php - Halaman diskon
  - v_kategori - Halaman kategori
  - v_keranjang - Halaman keranjang
  - v_login - Halaman login
  - v_produk - Halaman produk
- public/img - Gambar produk dan aset
- public/NiceAdmin - Template admin
- public/dashboard-toko - Halaman dashboard toko

## Keseluruhan Struktur Proyek

+---app
ª ª .htaccess
ª ª Common.php
ª ª index.html
ª ª  
ª +---Config
ª ª ª App.php
ª ª ª Autoload.php
ª ª ª Cache.php
ª ª ª Constants.php
ª ª ª ContentSecurityPolicy.php
ª ª ª Cookie.php
ª ª ª CURLRequest.php
ª ª ª Database.php
ª ª ª DocTypes.php
ª ª ª Email.php
ª ª ª Encryption.php
ª ª ª Events.php
ª ª ª Exceptions.php
ª ª ª Feature.php
ª ª ª Filters.php
ª ª ª ForeignCharacters.php
ª ª ª Format.php
ª ª ª Generators.php
ª ª ª Honeypot.php
ª ª ª Images.php
ª ª ª Kint.php
ª ª ª Logger.php
ª ª ª Migrations.php
ª ª ª Mimes.php
ª ª ª Modules.php
ª ª ª Pager.php
ª ª ª Paths.php
ª ª ª Publisher.php
ª ª ª Routes.php
ª ª ª Routing.php
ª ª ª Security.php
ª ª ª Services.php
ª ª ª Session.php
ª ª ª Toolbar.php
ª ª ª UserAgents.php
ª ª ª Validation.php
ª ª ª View.php
ª ª ª  
ª ª +---Boot
ª ª development.php
ª ª production.php
ª ª testing.php
ª ª  
ª +---Controllers
ª ª ApiController.php
ª ª AuthController.php
ª ª BaseController.php
ª ª DiskonController.php
ª ª Home.php
ª ª KategoriController.php
ª ª ProdukController.php
ª ª TransaksiController.php
ª ª  
ª +---Database
ª ª +---Migrations
ª ª ª .gitkeep
ª ª ª 2025-05-12-072954_User.php
ª ª ª 2025-05-12-072959_Product.php
ª ª ª 2025-05-12-073004_Transaction.php
ª ª ª 2025-05-12-073008_TransactionDetail.php
ª ª ª 2025-05-12-074523_ProductCategory.php
ª ª ª 2025-07-02-055156_Diskon.php
ª ª ª  
ª ª +---Seeds
ª ª .gitkeep
ª ª DiskonSeeder.php
ª ª ProductCategorySeeder.php
ª ª ProductSeeder.php
ª ª UserSeeder.php
ª ª  
ª +---Filters
ª ª .gitkeep
ª ª Auth.php
ª ª Redirect.php
ª ª  
ª +---Helpers
ª ª .gitkeep
ª ª  
ª +---Language
ª ª ª .gitkeep
ª ª ª  
ª ª +---en
ª ª Validation.php
ª ª  
ª +---Libraries
ª ª .gitkeep
ª ª  
ª +---Models
ª ª .gitkeep
ª ª CategoryModel.php
ª ª DiskonModel.php
ª ª ProductModel.php
ª ª TransactionDetailModel.php
ª ª TransactionModel.php
ª ª UserModel.php
ª ª  
ª +---ThirdParty
ª ª .gitkeep
ª ª  
ª +---Views
ª ª layout.php
ª ª layout_clear.php
ª ª v_checkout.php
ª ª v_diskon.php
ª ª v_faq.php
ª ª v_home.php
ª ª v_kategori.php
ª ª v_keranjang.php
ª ª v_login.php
ª ª v_produk.php
ª ª v_produkPDF.php
ª ª v_profile.php
ª ª welcome_message.php
ª ª  
ª +---components
ª ª footer.php
ª ª header.php
ª ª sidebar.php
ª ª  
ª +---errors
ª +---cli
ª ª error_404.php
ª ª error_exception.php
ª ª production.php
ª ª  
ª +---html
ª debug.css
ª debug.js
ª error_404.php
ª error_exception.php
ª production.php
