# Nama Proyek

Proyek ini dibangun menggunakan Laravel 11 dan pendekatan **Agile Development**. Sistem memiliki tampilan untuk **User** dan **Admin**, serta dilengkapi dengan dokumentasi teknis seperti **Use Case Diagram**, **Sequence Diagram**, dan **ERD (Entity Relationship Diagram)**.

---

## 📦 Teknologi yang Digunakan

- **Laravel 11** – Framework utama backend
- **MySQL** – Database sistem
- **FilamentPHP** – Admin panel dan manajemen data
- **TailwindCSS** – Styling frontend
- **jQuery** – Interaktivitas frontend
- **Laravel Debugbar** – Debugging dan profiling

---

## 📁 Struktur Proyek (Highlight)

- `/app` – Kode utama aplikasi
- `/resources/views` – Blade Templates (Frontend)
- `/public` – Folder untuk akses publik (gambar, assets)
- `/routes/web.php` – Rute aplikasi
- `/database/migrations` – Struktur database

---

## 🧪 Metodologi Pengembangan

Proyek dikembangkan dengan metode **Agile**, menggunakan pendekatan iteratif dan inkremental. Pengembangan dilakukan dalam beberapa sprint kecil, dengan pengujian dan evaluasi berkelanjutan.

---

## 📸 UI Tampilan

### 🧍 UI - User

![About](public/images/about.png)  
![Contact](public/images/contact.png)  
![Home 1](public/images/home1.png)  
![Home 2](public/images/home2.png)  
![About 3](public/images/abou3.png)  
![About 4](public/images/about4.png)  
![Service](public/images/service.png)  
![Service 1](public/images/service1.png)

### 🛠️ UI - Admin

![Login](public/images/admin/login.png)  
![Service 1](public/images/admin/service1.png)  
![Service 2](public/images/admin/service2.png)  
![Service 3](public/images/admin/service3.png)  
![Service 4](public/images/admin/service4.png)  
![Service 5](public/images/admin/service5.png)  
![Testimonial](public/images/admin/testimonial.png)  
![Testimonial 1](public/images/admin/testimonial1.png)  
![Testimonial 2](public/images/admin/testimonial2.png)  
![Testimonial 3](public/images/admin/testimonial3.png)  
![Promotion 1](public/images/admin/promotion1.png)  
![Promotion 2](public/images/admin/promotion2.png)  
![Promotion 3](public/images/admin/promotion3.png)  
![Promotion 4](public/images/admin/promotion4.png)  
![Promotion 5](public/images/admin/promotion5.png)  
![Promotion 6](public/images/admin/promotion6.png)  
![Promotion Service](public/images/admin/promotion_service.png)  
![Promotion Service 1](public/images/admin/promotion_service1.png)  
![Promotion Service 2](public/images/admin/promotion_service2.png)  
![Promotion Service 3](public/images/admin/promotion_service3.png)

---

## 🗃️ Alur Database (ERD)

![ERD](public/images/erd.png)

---

## 🔄 Sequence Diagram

![Sequence Diagram](public/images/sequence_diagram.png)

---

## 📌 Use Case Diagram

![Use Case](public/images/usecase1.png)

---

## ⚙️ Instalasi & Setup

```bash
git clone https://github.com/namauser/namaproject.git
cd namaproject
composer install
cp .env.example .env
php artisan key:generate

# Setup Database
php artisan migrate --seed

# Jalankan server
php artisan serve
