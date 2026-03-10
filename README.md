# API Inventaris Lab Komputer

Sistem REST API berbasis **Laravel 11** untuk manajemen aset laboratorium komputer secara digital dan efisien.

## Kelompok 8
1. **Aurelia Callysta Mamahit** (24515070011124) - Database Setup & Initial Structure.
2. **Azizah Puteri Mushthofa Hibatulloh** (245150707111058) - Implementation of Index & Store.
3. **Khansa Firyal Adiila** (245150700111209) - Implementation of Show, Update, Delete & Documentation.

## Fitur Utama (CRUD)
Aplikasi ini memungkinkan pengelola lab untuk:
- **Create**: Menambah aset baru (Nama barang, seri, stok, kondisi).
- **Read**: Menampilkan semua daftar aset atau detail satu aset secara spesifik.
- **Update**: Memperbarui data aset jika ada perubahan informasi atau status.
- **Delete**: Menghapus data aset dari sistem inventaris.

## Endpoint API
Akses API dapat dilakukan melalui URL berikut:
- `GET /api/lab-assets` - List semua inventaris.
- `POST /api/lab-assets` - Tambah inventaris baru.
- `GET /api/lab-assets/{id}` - Lihat detail per barang.
- `PUT /api/lab-assets/{id}` - Update data barang.
- `DELETE /api/lab-assets/{id}` - Hapus data barang.

## Cara Instalasi
1. Clone repository ini.
2. Jalankan `composer install`.
3. Duplikat `.env.example` menjadi `.env` dan atur database.
4. Jalankan `php artisan migrate`.
5. Jalankan `php artisan serve`.