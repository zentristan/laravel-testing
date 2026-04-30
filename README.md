# Vokara — Freelance Marketplace untuk Siswa SMK
 
> **Vokasi Karya** — Platform ini hadir sebagai solusi atas perbedaan antara hasil pendidikan SMK dengan kebutuhan industri, dengan mengusung konsep belajar melalui proyek nyata atau Project Based Learning (PjBL) yang dapat diakses secara inklusif oleh seluruh siswa SMK.
 
---
 
## 📌 Deskripsi Project
 
Vokara adalah platform freelance marketplace berbasis web yang dibangun khusus untuk ekosistem SMK (Sekolah Menengah Kejuruan) Indonesia. Platform ini hadir sebagai jawaban atas tema **"Human Capital and Future Skills"** — memfasilitasi siswa SMK untuk menawarkan jasa, membangun portofolio nyata, dan mendapatkan pengalaman kerja profesional sejak bangku sekolah.
 
Terdapat tiga peran utama dalam platform:
- **Talenta** — Siswa-siswi SMK sebagai pencari pengalaman dan pembangun portofolio 
- **Klien** — Individu atau UMKM sebagai pemberi proyek dan juga pemesan jasa
- **Mentor** — Guru sekolah asal sebagai pembimbing dan validator Siswa SMK

- 
## 🛠️ Tech Stack
 
| Layer | Teknologi |
|---|---|
| Backend Framework | Laravel 13 |
| Frontend Styling | Tailwind CSS |
| Authentication | Laravel Breeze |
| Database | MySQL (XAMPP lokal / Railway cloud) |
| Template Engine | Blade |
| Version Control | Git & GitHub |
| Local Dev Server | XAMPP |

## ✨ Fitur yang Tersedia
 
### 🔐 Autentikasi & Role
- Register & Login dengan Laravel Breeze
- Role-based access control: `talenta`, `klien`, `mentor`
- Redirect otomatis ke dashboard sesuai role
- Middleware proteksi per role
### 🎓 Dashboard Talenta (Siswa)
- Profil talenta & portofolio skill
- Manajemen jasa yang ditawarkan
- Riwayat pesanan masuk
- **PKL Mode** — mode khusus saat siswa sedang PKL (Praktik Kerja Lapangan)
### 💼 Dashboard Klien
- Browse & cari jasa berdasarkan kategori
- Halaman detail talenta (/PasarJasa/{id})
- Riwayat pesanan yang dibuat
### 👨‍🏫 Dashboard Mentor
- Pantau perkembangan talenta binaan
- Validasi & review profil talenta
### 🛒 Pasar Jasa
- Listing jasa dari seluruh talenta SMK
- Filter berdasarkan kategori/skill
- Halaman detail jasa per talenta
