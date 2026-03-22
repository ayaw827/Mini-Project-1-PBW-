# Mini-Project-1-PBW
**Nurhidayah | 2409116002 A'24**

## 1) Tampilan Setiap Section/Fitur

### A. Navbar (Menu Navigasi)
![Navbar](image)

Navbar saya letakkan di bagian paling atas halaman dan saya buat bersifat **sticky**, sehingga tetap terlihat ketika pengguna melakukan scroll. Di dalam navbar terdapat brand **any.gmmtv.** serta tiga menu utama yaitu **Home**, **About**, dan **Certificates**. Setiap menu akan mengarahkan pengguna ke section yang sesuai melalui sistem **anchor link**.

### B. Hero / Home
![Hero](image)

Pada bagian Hero atau Home, saya menampilkan perkenalan singkat berupa judul **“Halo, aku ANY”** yang dilengkapi dengan deskripsi singkat mengenai karakter tersebut. Di bagian ini juga terdapat tombol **“Get to Know Me”** yang akan mengarahkan pengguna ke section About. Di sisi kanan, saya menampilkan gambar profil yang sudah disesuaikan agar tetap proporsional dan responsif di berbagai ukuran layar.

### C. About Me
![About Me](image)

Pada section About Me, saya membaginya menjadi dua bagian utama dalam bentuk **card**. Card pertama berisi deskripsi lengkap mengenai karakter Any. Card kedua menampilkan daftar **skills** dalam bentuk **progress bar** dengan persentase yang berbeda-beda. Progress bar ini dibuat dinamis sehingga lebarnya mengikuti nilai persentase yang sudah ditentukan.

### D. Certificates
![Certificates](image)

Pada bagian Certificates, saya menampilkan beberapa sertifikat dalam bentuk **card** yang tersusun dalam tiga kolom. Setiap card berisi judul sertifikat, penyelenggara, tahun, serta tombol **“View Certificate”** yang terhubung langsung ke link Google Drive. Tampilan card dibuat interaktif dengan efek **hover** agar terlihat lebih modern.

### E. Footer
![Footer](image)

Pada bagian footer, saya menampilkan copyright yang secara otomatis menyesuaikan dengan tahun saat ini menggunakan JavaScript. Selain itu, terdapat tombol **“Back to top”** yang memudahkan pengguna untuk kembali ke bagian atas halaman dengan cepat.

---

## 2) Penjelasan Code Setiap Section/Fitur

### A. Navbar

#### HTML (`index.html`)
```html
<nav class="navbar navbar-expand-lg navbar-dark sticky-top nav-glass">
