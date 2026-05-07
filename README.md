# 🚀 Laravel Projects Collection

Repository ini adalah kumpulan berbagai project web development yang dibangun menggunakan *framework* Laravel. Dibuat sebagai arsip pembelajaran berkelanjutan, eksperimen *logic*, dan portofolio pengembangan aplikasi.

## 📂 Daftar Project

Di dalam repository ini terdapat beberapa project independen:

1. **KisekiDrop** 
   - **Deskripsi:** Aplikasi web berbasis sistem RNG (*Random Number Generator*) untuk melakukan *gacha* karakter anime berdasarkan *rarity* (N, R, SR, SSR) dan menyimpannya ke dalam koleksi *inventory*.
   - **Tech Stack:** Laravel 11, Tailwind CSS, Vite, MySQL.
   - **Status:** *In Development*

## 🛠️ Tech Stack & Tools

Secara umum, project-project di dalam repository ini memanfaatkan teknologi berikut:
- **Backend:** PHP 8.x, Laravel
- **Frontend:** Tailwind CSS, Blade Templating, Vite
- **Database:** MySQL / SQLite
- **Lainnya:** Composer, NPM

## ⚙️ Cara Menjalankan Project

Karena ini adalah kumpulan project, silakan masuk ke folder masing-masing project terlebih dahulu sebelum menjalankannya.

1. Clone repository ini:
   ```bash
   git clone [https://github.com/username-kamu/nama-repo-kamu.git](https://github.com/username-kamu/nama-repo-kamu.git)
2. Masuk ke direktori project yang dituju:
   ```bash
   cd nama-folder-project
3. Instalasi dependencies PHP dan Node.js:
   ```bash
   composer install
   npm install
4. Salin file konfigurasi environment:
   ```bash
   cp .env.example .env
5. Generate application key dan lakukan migrasi database:
   ```bash
   php artisan key:generate
   php artisan migrate
6. Salin file konfigurasi environment:
   ```bash
   php artisan serve
   npm run dev

## 👨‍💻 Author
**Faqih Asyari**
Informatics Engineering | Universitas Muhammadiyah Cirebon (UMC)
