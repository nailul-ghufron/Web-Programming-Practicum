# Web-Programming-Practicum
Berikut langkah cepat untuk menyelesaikannya langsung di terminal CachyOS kamu:

### 1. Buat File Konfigurasi

Pastikan kamu berada di folder `Modul-4`, lalu buat file-nya:

Bash

`touch docker-compose.yml
mkdir src`

### 2. Isi `docker-compose.yml`

Gunakan `nano` atau `micro` (editor bawaan CachyOS yang ramah terminal) untuk mengisi file tersebut:

Bash

`nano docker-compose.yml`

**Tempel (Paste) kode ini:***(Catatan: Saya ubah port ke **8081** agar tidak bentrok dengan `phpmyadmin` kamu yang ada di port 8080).*

YAML

`services:
  php-praktikum:
    image: php:8.2-apache
    container_name: php-modul
    ports:
      - "8081:80"
    volumes:
      - ./src:/var/www/html`

*Tekan `Ctrl+O`, `Enter`, lalu `Ctrl+X` untuk simpan dan keluar.*

### 3. Jalankan Docker

Sekarang jalankan perintahnya lagi:

Bash

`docker compose up -d`

### 4. Buat File Latihan (Contoh Latihan 1)

Agar bisa langsung dites di browser:

Bash

`nano src/latihan1.php`

**Isi dengan kode dari modul:**

PHP

`<?php
$hello = "Hello World!";
$a_number = 4;
$anotherNumber = 8.9;
$bool = true;

echo $hello;
?>`

---

### **Cek Hasilnya**

Buka browser dan akses:
`http://localhost:8081/latihan1.php`

**Ringkasan Solusi Latihan 1 (Untuk Jurnal):**

- **Percobaan:** Hapus notasi `$` (contoh: `hello = "Hello World!";`).
- **Hasil:** Muncul `Parse error: syntax error, unexpected token "="`.
- **Kesimpulan:** PHP wajib menggunakan simbol `$` untuk mendefinisikan variabel agar interpreter mengenalinya sebagai identitas penyimpan data, bukan sebagai konstanta atau keyword.

---

### **1. Mematikan Container**

Jika kamu ingin menghentikan layanan sementara tanpa menghapus konfigurasi:

Bash

`docker compose stop`

Jika kamu ingin mematikan sekaligus menghapus container (bersih-bersih):

Bash

`docker compose down`

### **2. Menjalankan Kembali**

Untuk menyalakannya lagi di latar belakang (*background*):

Bash

`docker compose up -d`

### **3. Restart Cepat (Mematikan lalu Menyalakan)**

Jika ada perubahan pada file `docker-compose.yml` atau ada error "port already in use", gunakan satu baris ini:

Bash

`docker compose down && docker compose up -d`

---

### **Tips Tambahan: Cek Status**

Setelah menjalankan `up -d`, selalu pastikan container sudah benar-benar "Up" dengan:

Bash

`docker ps`