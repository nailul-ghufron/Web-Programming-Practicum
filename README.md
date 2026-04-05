# 📚 Web Programming Practicum

Repositori ini berisi kumpulan latihan **Praktikum Pemrograman Web** yang dijalankan menggunakan **PHP 8.2** di dalam container **Docker**. Setiap modul berisi file-file PHP yang mencakup topik tertentu, dari dasar variabel hingga array dan fungsi.

---

## 🗂️ Struktur Proyek

```
Web-Programming-Practicum/
├── docker-compose.yml       # Konfigurasi Docker untuk menjalankan PHP + Apache
├── index.html               # Halaman latihan JavaScript (pengecekan bilangan genap/ganjil)
└── src/
    ├── Modul-4/             # Dasar PHP: Variabel, Operator, Kondisi, Perulangan
    │   ├── latihan1.php     # Variabel tanpa tanda $ (simulasi error — lihat catatan)
    │   ├── latihan2.php     # Variabel dan interpolasi string
    │   ├── latihan3.php     # Operator aritmatika
    │   ├── latihan4.php     # Operator penugasan (assignment operators)
    │   ├── latihan5.php     # Pernyataan if sederhana
    │   ├── latihan6.php     # Pernyataan switch
    │   └── latihan7.php     # Perulangan: for, while, do-while
    ├── Modul-5/             # Fungsi PHP
    │   ├── fungsi.php       # Fungsi dasar dengan return value
    │   ├── ReturnValue.php  # Penggunaan return value pada fungsi
    │   ├── NilaiPangkat.php # Fungsi menghitung nilai pangkat
    │   ├── ParameterBebas.php # Fungsi dengan parameter variabel (variadic)
    │   └── Fibonacci.php    # Fungsi rekursif deret Fibonacci
    └── Modul-6/             # Array PHP
        ├── PembuatanArray.php        # Pembuatan array asosiatif
        ├── PerulanganTerhadapArray.php # Iterasi array dengan foreach
        ├── PengurutanArray.php       # Pengurutan array (asort, arsort, ksort, krsort)
        ├── MengubahUrutanArray.php   # Operasi perubahan urutan array
        └── MencariNilaidalamArray.php # Pencarian nilai di dalam array
```

---

## ⚙️ Prasyarat

Pastikan sudah terinstal:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/) (sudah terintegrasi di Docker Desktop / Docker Engine v2+)

---

## 🚀 Cara Menjalankan

### 1. Clone Repositori

```bash
git clone https://github.com/ghufron99119/Web-Programming-Practicum.git
cd Web-Programming-Practicum
```

### 2. Jalankan Docker Container

```bash
docker compose up -d
```

Container akan berjalan di latar belakang menggunakan image `php:8.2-apache`.

### 3. Akses di Browser

Buka browser dan akses:

```
http://localhost:8081/
```

Untuk mengakses file latihan tertentu, contoh:

```
http://localhost:8081/Modul-4/latihan2.php
http://localhost:8081/Modul-5/Fibonacci.php
http://localhost:8081/Modul-6/PengurutanArray.php
```

---

## 🐳 Konfigurasi Docker

File `docker-compose.yml` yang digunakan:

```yaml
services:
  php-praktikum:
    image: php:8.2-apache
    container_name: prac-web-programming
    ports:
      - "8081:80"
    volumes:
      - ./src:/var/www/html
```

> **Catatan port:** Port yang digunakan adalah `8081` (bukan `8080`) untuk menghindari konflik dengan layanan lain seperti phpMyAdmin yang mungkin sudah berjalan di port `8080`.

---

## 🛠️ Manajemen Container

### Menghentikan Container (sementara)

```bash
docker compose stop
```

### Menghentikan dan Menghapus Container

```bash
docker compose down
```

### Menjalankan Kembali

```bash
docker compose up -d
```

### Restart Cepat (jika ada perubahan konfigurasi atau error port)

```bash
docker compose down && docker compose up -d
```

### Cek Status Container

```bash
docker ps
```

Pastikan container `prac-web-programming` berstatus **Up**.

---

## 📖 Ringkasan Modul

### Modul 4 — Dasar PHP

Topik: Variabel, Tipe Data, Operator, Kondisi, dan Perulangan.

| File | Topik | Deskripsi |
|------|-------|-----------|
| `latihan1.php` | Variabel (simulasi error) | Sengaja tidak menggunakan `$` — akan menghasilkan `Parse error`. Lihat catatan di bawah. |
| `latihan2.php` | Variabel & String | Deklarasi variabel dan interpolasi string dalam `echo` |
| `latihan3.php` | Operator Aritmatika | Penjumlahan, pengurangan, perkalian, pembagian, dan modulus |
| `latihan4.php` | Operator Penugasan | `+=`, `-=`, `*=`, `/=`, `%=`, `.=` |
| `latihan5.php` | Kondisi `if` | Percabangan sederhana menggunakan `if` |
| `latihan6.php` | Kondisi `switch` | Percabangan menggunakan `switch-case` |
| `latihan7.php` | Perulangan | Tiga versi loop: `for`, `while`, dan `do-while` |

> ⚠️ **Catatan `latihan1.php`:** File ini adalah **simulasi error** yang disengaja untuk keperluan jurnal/laporan. Variabel PHP ditulis tanpa awalan `$` (contoh: `hello = "Hello World!"`), yang akan menghasilkan error:
> ```
> Parse error: syntax error, unexpected token "="
> ```
> **Kesimpulan:** PHP **wajib** menggunakan simbol `$` di depan setiap nama variabel agar interpreter dapat mengenalinya sebagai penyimpan data.

---

### Modul 5 — Fungsi PHP

Topik: Deklarasi fungsi, parameter, return value, rekursi, dan parameter variadic.

| File | Topik | Deskripsi |
|------|-------|-----------|
| `fungsi.php` | Fungsi Dasar | Mendefinisikan dan memanggil fungsi `mySum` yang menjumlahkan dua angka |
| `ReturnValue.php` | Return Value | Demonstrasi penggunaan `return` pada fungsi |
| `NilaiPangkat.php` | Fungsi Pangkat | Menghitung nilai pangkat menggunakan fungsi |
| `ParameterBebas.php` | Parameter Variadic | Fungsi yang menerima jumlah argumen tidak terbatas |
| `Fibonacci.php` | Rekursi | Menghitung bilangan Fibonacci ke-N secara rekursif |

---

### Modul 6 — Array PHP

Topik: Pembuatan, iterasi, pengurutan, dan pencarian nilai dalam array.

| File | Topik | Deskripsi |
|------|-------|-----------|
| `PembuatanArray.php` | Array Asosiatif | Membuat array asosiatif dan menampilkannya dengan `foreach` |
| `PerulanganTerhadapArray.php` | Iterasi Array | Perulangan terhadap elemen-elemen array |
| `PengurutanArray.php` | Pengurutan Array | `asort`, `arsort` (urut nilai), `ksort`, `krsort` (urut kunci) |
| `MengubahUrutanArray.php` | Manipulasi Urutan | Membalik atau mengubah urutan elemen array |
| `MencariNilaidalamArray.php` | Pencarian Nilai | Mencari nilai tertentu di dalam array |

---

## 🌐 index.html (JavaScript)

File `index.html` di root proyek berisi latihan **JavaScript** sederhana yang **tidak memerlukan Docker** — dapat langsung dibuka di browser.

**Fungsi:** Menentukan apakah sebuah bilangan yang dimasukkan pengguna adalah **bilangan genap** atau **bilangan ganjil**.

```
Buka file: index.html → langsung di browser (double-click atau drag ke browser)
```

---

## 📝 Catatan Tambahan

- Semua file PHP di dalam folder `src/` otomatis terbaca oleh Apache di dalam container karena folder tersebut di-*mount* sebagai `/var/www/html`.
- Tidak perlu restart container setiap kali mengubah file PHP — perubahan langsung terlihat saat halaman di-refresh.
- Container menggunakan image resmi `php:8.2-apache` yang sudah bundled dengan Apache web server.