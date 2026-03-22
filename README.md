# Mini-Project-1-PBW
**Nurhidayah | 2409116002 A’24**

## 1) Tampilan Setiap Section/Fitur

### A. Navbar (Menu Navigasi)
<img width="1812" height="68" alt="image" src="https://github.com/user-attachments/assets/36b6b8d2-848d-4340-83b7-915bd5e3a2a4" />

Navbar diletakkan di bagian paling atas dan dibuat bersifat **sticky**, sehingga tetap terlihat saat pengguna melakukan scroll.  
Navbar berisi brand **any.gmmtv.** serta menu navigasi:

- Home  
- About  
- Projects  
- Experience  
- Achievements  
- Certificates  
- Contact  

Setiap menu menggunakan sistem **anchor link** yang akan langsung mengarahkan ke section terkait.

### B. Hero / Home
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/d725332a-b805-45bf-8285-1a49485ebb81" />

Pada bagian Hero, ditampilkan perkenalan singkat berupa:

- Judul: **“Halo, aku ANY”**
- Deskripsi singkat
- Tombol **“Get to Know Me”** (scroll ke About)

Di sisi kanan terdapat gambar profil yang dibuat responsif dan proporsional agar tetap rapi di berbagai ukuran layar.

### C. About Me
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/8d9cac06-d4d1-4a2c-90ab-9288a2b19bd4" />

Section About terdiri dari dua bagian utama:

1. **Deskripsi**
   - Berisi penjelasan lengkap mengenai karakter atau profil.

2. **Skills**
   - Ditampilkan dalam bentuk **progress bar**
   - Setiap skill memiliki persentase (HTML, CSS, Desain, dll)
   - Progress bar bersifat dinamis mengikuti nilai dari database

### D. Projects
<img width="1819" height="562" alt="image" src="https://github.com/user-attachments/assets/d12ef6e3-8446-4b35-b815-09fd7b298034" />

Section Projects menampilkan daftar project dalam bentuk card.

Setiap project berisi:
- Judul project  
- Deskripsi singkat  
- Tombol **“View Project”**  

Project yang ditampilkan antara lain:
- Website Portfolio  
- Desain Canva Project  
- Data Analysis Project  

Semua project terhubung ke link eksternal seperti GitHub, Canva, atau Google Colab.

### E. Experience & Education
<img width="1803" height="392" alt="image" src="https://github.com/user-attachments/assets/004e828a-e96e-4f08-92ca-df3826f45e86" />

Section ini menampilkan pengalaman dan pendidikan dalam bentuk card.

Contoh data:
- Mahasiswa Sistem Informasi (Universitas Mulawarman)  
- Kepala Biro Kominfo  

Setiap card berisi:
- Judul posisi  
- Instansi  
- Tahun  
- Deskripsi singkat  

### F. Achievements
<img width="1800" height="548" alt="image" src="https://github.com/user-attachments/assets/b85849b7-7e81-4292-8ccc-94708470041c" />

Section Achievements menampilkan pencapaian dalam bentuk card.

Setiap card berisi:
- Judul pencapaian  
- Tahun  
- Deskripsi singkat  

Contoh:
- Juara 2 Lomba Film Pendek Fiksi  
- Peserta Study Club INFOSA  

### G. Certificates
<img width="1794" height="582" alt="image" src="https://github.com/user-attachments/assets/69b41498-9a52-46e3-ac6f-f36cf380dc7e" />

Section Certificates menampilkan sertifikat dalam bentuk card.

Isi card:
- Judul sertifikat  
- Penyelenggara  
- Tahun  
- Tombol **“View Certificate”**

Tombol akan mengarah ke link eksternal (Google Drive / dll).

### H. Contact
<img width="1806" height="483" alt="image" src="https://github.com/user-attachments/assets/5da68d22-6277-4fc3-b0c1-812848af4d92" />

Section Contact menampilkan platform kontak dalam bentuk card:

- Email  
- Instagram  
- GitHub  
- LinkedIn  

Setiap card hanya menampilkan:
- Nama platform  
- Tombol **“Visit”**

Ketika tombol diklik:
- Email → membuka aplikasi email (mailto)  
- Sosial media → membuka link langsung  

### I. Footer
<img width="1822" height="108" alt="image" src="https://github.com/user-attachments/assets/acec7f72-326f-4999-8ccc-3d0b2fc786be" />

Footer berisi:
- Copyright otomatis (tahun mengikuti sistem)
- Nama pemilik portfolio  
- Tombol **“Back to top”**  

Bisaaa. Ini aku bikinin **penjelasan fitur, teknologi, class, dan database** yang **sesuai tampilan terbaru website kamu** — jadi nyambung sama UI yang sekarang, bukan yang versi lama lagi.

Kamu bisa pakai ini buat **README, laporan, atau penjelasan tugas**.

---

## 2) Penjelasan Fitur, Teknologi, Class, dan Database

### A. Navbar

Pada bagian navbar, saya meletakkan menu navigasi di bagian paling atas halaman dan membuatnya bersifat **sticky**, sehingga navbar tetap terlihat ketika halaman di-scroll. Navbar berisi brand **any.gmmtv.** dan menu navigasi menuju setiap section, yaitu:

* Home
* About
* Projects
* Experience
* Achievements
* Certificates
* Contact

Menu-menu tersebut menggunakan sistem **anchor link**, sehingga ketika salah satu menu diklik, halaman akan langsung berpindah ke section yang sesuai.

#### Class yang digunakan

```html
<nav class="navbar navbar-expand-lg navbar-dark sticky-top nav-glass">
```

#### Fungsi class

* `navbar` → komponen navigasi dari Bootstrap
* `navbar-expand-lg` → navbar responsif, akan berubah menjadi menu collapse di layar kecil
* `navbar-dark` → menyesuaikan warna elemen navbar untuk background gelap
* `sticky-top` → membuat navbar tetap di atas saat scroll
* `nav-glass` → class custom untuk efek glassmorphism

#### CSS custom

```css
.nav-glass{
  background: rgba(11,18,32,.85) !important;
  backdrop-filter: blur(10px);
  border-bottom: 1px solid var(--border);
}
```

#### Anchor scroll

```css
#home, #about, #projects, #experience, #achievements, #certificates, #contact{
  scroll-margin-top: 90px;
}
```

Bagian ini digunakan agar saat pengguna klik menu navbar, isi section tidak tertutup oleh navbar sticky.

### B. Hero / Home

Bagian Hero merupakan tampilan awal website yang berfungsi sebagai pengenalan singkat. Di sini saya menampilkan:

* judul utama: **Halo, aku ANY**
* deskripsi singkat
* tombol **Get to Know Me**
* gambar profil di sisi kanan

Data di bagian ini tidak ditulis manual di HTML, tetapi diambil dari database melalui PHP.

#### Data yang digunakan

* `profile.name`
* `profile.short_intro`
* `profile.image`

#### Query PHP

```php
$profileResult = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$profileData = mysqli_fetch_assoc($profileResult);
```

#### Variabel hasil

```php
$profileName = $profileData['name'] ?? 'User';
$profileIntro = $profileData['short_intro'] ?? 'Deskripsi singkat belum tersedia.';
$profileImage = $profileData['image'] ?? 'assets/default.jpg';
```

#### HTML

```php
<h1 class="fw-bold mb-2">
  Halo, aku <span class="text-info"><?= htmlspecialchars($profileName); ?></span>
</h1>
```

#### Class yang dipakai

* `section` → memberi jarak section
* `hero-section` → class custom untuk styling hero
* `container`, `row`, `col-lg-7`, `col-lg-5` → grid system Bootstrap
* `profile-img` → styling gambar profil
* `btn btn-info` → tombol Bootstrap yang di-override warna custom

#### CSS gambar

```css
.profile-img{
  width: min(320px, 90%);
  aspect-ratio: 1/1;
  object-fit: cover;
  border-radius: 22px;
}
```

### C. About Me

Section About digunakan untuk menampilkan informasi lebih detail mengenai profil dan kemampuan. Section ini dibagi menjadi dua card:

1. **Deskripsi**
2. **Skills**

Data deskripsi diambil dari tabel `about`, sedangkan data skill diambil dari tabel `skills`.

#### Query database

```php
$aboutResult = mysqli_query($conn, "SELECT * FROM about LIMIT 1");
$aboutData = mysqli_fetch_assoc($aboutResult);

$skillsResult = mysqli_query($conn, "SELECT * FROM skills ORDER BY id ASC");
```

#### Data yang digunakan

* `about.description`
* `skills.name`
* `skills.level`

#### HTML deskripsi

```php
<p class="text-white-50 mb-0">
  <?= nl2br(htmlspecialchars($aboutDescription)); ?>
</p>
```

#### HTML skills

```php
<?php while ($skill = mysqli_fetch_assoc($skillsResult)): ?>
```

Setiap skill ditampilkan dalam bentuk progress bar. Lebar progress bar mengikuti nilai `level` yang ada di database.

#### HTML progress bar

```php
<div class="progress-bar" style="width: <?= $skillLevel; ?>%"></div>
```

#### Class yang dipakai

* `card-soft` → card custom dengan background transparan gelap
* `progress` → komponen progress bar
* `progress-bar` → isi progress

#### CSS progress

```css
.progress{
  background: rgba(226,232,240,.10);
  border: 1px solid var(--border);
  border-radius: 999px;
  height: 12px;
}

.progress-bar{
  background: var(--accent) !important;
}
```

### D. Projects

Section Projects digunakan untuk menampilkan hasil karya atau project yang pernah dibuat. Data diambil dari tabel `projects`.

Setiap project ditampilkan dalam bentuk card yang berisi:

* judul project
* deskripsi singkat
* tombol **View Project**

#### Query database

```php
$projectsResult = mysqli_query($conn, "SELECT * FROM projects ORDER BY id ASC");
```

#### Kolom database yang digunakan

* `title`
* `description`
* `link`

#### HTML

```php
<div class="cert-card p-4 h-100 d-flex flex-column">
  <h5 class="mb-2"><?= htmlspecialchars($projectTitle); ?></h5>
  <p class="text-white-50 mb-3"><?= htmlspecialchars($projectDescription); ?></p>
</div>
```

#### Class yang dipakai

* `cert-card` → card custom
* `d-flex flex-column` → agar tombol bisa berada di bawah
* `mt-auto` → mendorong tombol ke bagian bawah card

#### Fungsi tombol

Tombol akan mengarahkan pengguna ke link project, misalnya GitHub, Canva, atau Google Colab.

### E. Experience & Education

Section ini digunakan untuk menampilkan pengalaman organisasi, pendidikan, atau aktivitas akademik yang relevan. Data diambil dari tabel `experiences`.

Setiap card berisi:

* judul
* nama tempat
* tahun
* deskripsi

#### Query database

```php
$experiencesResult = mysqli_query($conn, "SELECT * FROM experiences ORDER BY id ASC");
```

#### Kolom database

* `title`
* `place_name`
* `year`
* `description`

#### HTML

```php
<div class="card-soft p-4 h-100">
  <h5 class="mb-1"><?= htmlspecialchars($expTitle); ?></h5>
  <p class="text-white-50 mb-2">
    <?= htmlspecialchars($expPlace); ?> • <?= htmlspecialchars($expYear); ?>
  </p>
</div>
```

Section ini berguna untuk menunjukkan latar belakang pendidikan dan pengalaman yang mendukung isi portfolio.

### F. Achievements

Section Achievements digunakan untuk menampilkan pencapaian atau prestasi. Data diambil dari tabel `achievements`.

Setiap card berisi:

* judul pencapaian
* tahun
* deskripsi

#### Query database

```php
$achievementsResult = mysqli_query($conn, "SELECT * FROM achievements ORDER BY id ASC");
```

#### Kolom database

* `title`
* `description`
* `year`

#### HTML

```php
<div class="cert-card p-3 h-100">
  <h5 class="mb-1"><?= htmlspecialchars($achievementTitle); ?></h5>
  <p class="text-white-50 mb-2"><?= htmlspecialchars($achievementYear); ?></p>
  <p class="text-white-50 mb-0"><?= htmlspecialchars($achievementDescription); ?></p>
</div>
```

### G. Certificates

Section Certificates digunakan untuk menampilkan sertifikat yang dimiliki. Data diambil dari tabel `certificates`.

Isi card meliputi:

* judul sertifikat
* penyelenggara
* tahun
* tombol **View Certificate**

#### Query database

```php
$certificatesResult = mysqli_query($conn, "SELECT * FROM certificates ORDER BY id ASC");
```

#### Kolom database

* `title`
* `issuer`
* `year`
* `link`

#### HTML tombol

```php
<a
  href="<?= htmlspecialchars($certificateLink); ?>"
  target="_blank"
  rel="noopener"
  class="btn btn-sm btn-info mt-2"
>
  View Certificate
</a>
```

Tombol ini akan membuka link sertifikat di tab baru.

### H. Contact

Section Contact digunakan untuk menampilkan informasi kontak. Data diambil dari tabel `contacts`.

Contact yang ditampilkan:

* Email
* Instagram
* GitHub
* LinkedIn

Setiap card hanya menampilkan:

* nama platform
* tombol **Visit**

#### Query database

```php
$contactsResult = mysqli_query($conn, "SELECT * FROM contacts ORDER BY id ASC");
```

#### Kolom database

* `platform`
* `display_text`
* `link`

Karena tampilan terbaru kamu tidak lagi menampilkan teks abu-abu di bawah judul, maka yang ditampilkan hanya nama platform dan tombol.

#### HTML

```php
<div class="card-soft p-4 h-100 text-center">
  <h5 class="mb-4"><?= htmlspecialchars($contactPlatform); ?></h5>
  <a href="<?= htmlspecialchars($contactLink); ?>" class="btn btn-sm btn-info">Visit</a>
</div>
```

Untuk Email, link dapat menggunakan format `mailto:` agar pengguna bisa langsung diarahkan ke aplikasi email.

### I. Footer

Footer berada di bagian paling bawah halaman. Bagian ini menampilkan:

* copyright
* nama portfolio
* tombol **Back to top**

#### HTML

```php
<footer class="py-4 border-top border-secondary-subtle">
```

#### Fungsi

* `py-4` → memberi padding atas bawah
* `border-top` → garis atas footer
* `border-secondary-subtle` → warna border halus

Tahun di footer ditampilkan secara otomatis menggunakan:

```php
<?= date('Y'); ?>
```

---

# 3) Teknologi yang Digunakan

## A. HTML5

Digunakan untuk membuat struktur dasar halaman seperti:

* navbar
* section
* card
* footer

## B. CSS3

Digunakan untuk:

* mengatur tema warna
* efek glassmorphism
* hover effect
* animasi fadeUp
* responsive styling
* custom progress bar

## C. Bootstrap 5.3.3

Digunakan untuk:

* grid layout
* navbar responsif
* tombol
* spacing utility
* layout container dan row-column

Contoh class Bootstrap:

* `container`
* `row`
* `col-md-4`
* `col-lg-6`
* `btn`
* `navbar`
* `sticky-top`

## D. PHP

Digunakan sebagai backend untuk:

* menghubungkan website ke database
* mengambil data dari database
* menampilkan data dinamis ke HTML

Contoh:

```php
mysqli_query($conn, "SELECT * FROM projects ORDER BY id ASC");
```

## E. MySQL

Digunakan untuk menyimpan data website secara dinamis, seperti:

* profile
* about
* skills
* projects
* experiences
* achievements
* certificates
* contacts

## F. Laragon

Digunakan sebagai local server untuk menjalankan:

* Apache
* MySQL
* project PHP

---

# 4) Struktur Class CSS yang Digunakan

## Class custom

* `nav-glass` → navbar blur transparan
* `section` → jarak antar section
* `section-alt` → background section alternatif
* `card-soft` → card utama dengan efek soft glass
* `cert-card` → card untuk certificate/project/achievement
* `hero-section` → styling hero
* `profile-img` → styling gambar profil

## Class Bootstrap

* `container`
* `row`
* `col-md-4`
* `col-lg-6`
* `btn`
* `btn-info`
* `text-white-50`
* `fw-bold`
* `sticky-top`
* `navbar-expand-lg`

---

# 5) Struktur Database

Website ini menggunakan database **portfolio_db**.

## Tabel yang digunakan

### 1. `brand`

Menyimpan nama brand website.

* `id`
* `brand_name`

### 2. `profile`

Menyimpan data hero.

* `id`
* `name`
* `short_intro`
* `image`

### 3. `about`

Menyimpan deskripsi profile.

* `id`
* `description`

### 4. `skills`

Menyimpan daftar skill.

* `id`
* `name`
* `level`

### 5. `projects`

Menyimpan project portfolio.

* `id`
* `title`
* `description`
* `image`
* `link`

### 6. `experiences`

Menyimpan pengalaman dan pendidikan.

* `id`
* `title`
* `place_name`
* `year`
* `description`

### 7. `achievements`

Menyimpan pencapaian.

* `id`
* `title`
* `description`
* `year`

### 8. `certificates`

Menyimpan data sertifikat.

* `id`
* `title`
* `issuer`
* `year`
* `link`

### 9. `contacts`

Menyimpan data kontak.

* `id`
* `platform`
* `display_text`
* `link`

---

# 6) Alur Kerja Website

Alur kerja website ini adalah:

1. PHP melakukan koneksi ke database `portfolio_db`
2. PHP menjalankan query untuk mengambil data dari setiap tabel
3. Data yang diambil disimpan ke dalam variabel
4. Variabel tersebut ditampilkan ke HTML menggunakan PHP
5. CSS dan Bootstrap mengatur tampilan visual website
6. Pengguna dapat berinteraksi dengan tombol dan menu navigasi

---

# 7) Konsep Dinamis pada Website

Website ini bersifat **dinamis** karena isi kontennya tidak ditulis langsung secara permanen di HTML, tetapi diambil dari database.

Contohnya:

* nama profile diambil dari tabel `profile`
* skill diambil dari tabel `skills`
* project diambil dari tabel `projects`
* sertifikat diambil dari tabel `certificates`

Dengan begitu, jika data di database berubah, tampilan website juga akan ikut berubah tanpa perlu menulis ulang isi HTML satu per satu.

## 3) Teknologi yang Digunakan

- **HTML5** → struktur halaman  
- **CSS3** → styling, animasi, glassmorphism  
- **Bootstrap 5.3.3** → layout & komponen UI  
- **PHP** → backend (ambil data dari database)  
- **MySQL** → database  
- **Laragon** → local server  

## 4) Struktur Folder

<img width="241" height="427" alt="image" src="https://github.com/user-attachments/assets/a00c24a3-d74a-498d-9276-562ac1fe5453" />
