# TaskKu — AI-Assisted Debugging Exercise (Session 1)

Mini project untuk **Harisenin BooKil - Full Stack Web Developer** (Agustus 2026).

Branch ini berisi enam kesalahan umum pada Laravel. Aplikasi ini sengaja dibuat
bermasalah. Tujuanmu adalah mencari penyebab dan memperbaikinya dengan bantuan
AI, bukan meminta AI menulis ulang seluruh project.

## Misi Latihan

Perbaiki aplikasi agar enam fungsi berikut dapat berjalan dengan benar:

1. Form tambah task memiliki perlindungan CSRF.
2. Task dapat dibuat dengan judul dan deskripsi opsional.
3. Halaman edit menampilkan task yang dipilih.
4. Judul dan deskripsi task dapat diperbarui.
5. Task yang sudah selesai dapat diubah kembali menjadi belum selesai.
6. Task dapat dihapus menggunakan HTTP method yang tepat.

Jalankan test setelah setiap perbaikan:

```bash
php artisan test --filter=TaskExerciseTest
```

Gunakan alur kerja berikut untuk setiap error:

1. Munculkan kembali masalah melalui browser atau test suite.
2. Salin pesan error secara lengkap, bukan hanya baris terakhir.
3. Minta AI menjelaskan error dan menunjukkan file yang kemungkinan bermasalah.
4. Minta solusi paling sederhana beserta alasan solusi tersebut bekerja.
5. Periksa perubahan yang disarankan sebelum menerapkannya.
6. Jalankan test dan periksa fiturnya secara manual.

Contoh prompt:

```text
Saya sedang belajar Laravel dengan memperbaiki aplikasi task manager sederhana.
Ketika saya [jelaskan tindakan], muncul error berikut: [salin error lengkap].
Kode yang berkaitan: [salin bagian kode yang paling relevan].
Jelaskan penyebab utamanya, sarankan perbaikan paling sederhana, dan jelaskan
cara memverifikasi hasilnya. Jangan ubah file yang tidak berkaitan.
```

A simple to-do list application built with Laravel 12 + Bootstrap 5 + MySQL.
Designed for beginners and career switchers — easy to understand, easy to debug.

## Tech Stack

| Layer      | Technology           |
|------------|---------------------|
| Frontend   | Blade + Bootstrap 5 |
| Backend    | Laravel 12 (PHP 8.3)|
| Database   | MySQL               |

## Branches

| Branch       | Description                          |
|--------------|--------------------------------------|
| `session-1`  | Clean working version (for demo)     |
| `session-2`  | Broken version with 6 planted bugs   |

## Setup Instructions

### Prerequisites

- PHP 8.2+
- Composer
- MySQL 8.0+

### Installation

```bash
# 1. Clone the repo
git clone https://github.com/muh-arga/harisenin-bookil-fsd.git
cd harisenin-bookil-fsd

# 2. Switch to session-1 branch (clean version)
git checkout session-1

# 3. Install PHP dependencies
composer install

# 4. Copy environment file
cp .env.example .env

# 5. Generate app key
php artisan key:generate

# 6. Create MySQL database
mysql -u root -p -e "CREATE DATABASE taskku;"

# 7. Configure .env — set DB credentials
#    DB_DATABASE=taskku
#    DB_USERNAME=root
#    DB_PASSWORD=yourpassword

# 8. Run migrations
php artisan migrate

# 9. Start the dev server
php artisan serve
```

Visit http://localhost:8000

## Features

- List all tasks
- Add new task (title + description)
- Edit task
- Mark task done / undone (toggle)
- Delete task

## Project Structure

```
app/
  Http/Controllers/
    TaskController.php     — 6 methods (index, store, edit, update, toggle, destroy)
  Models/
    Task.php              — Eloquent model
database/
  migrations/
    xxxx_create_tasks_table.php — tasks table schema
resources/views/
  layout.blade.php        — Bootstrap layout + navbar
  tasks/
    index.blade.php       — task list + add form
    edit.blade.php        — edit form
routes/
  web.php                 — 6 routes
```

## Session 2 — Debug Challenge

Switch to `session-2` branch and try to find all 6 bugs!

```bash
git checkout session-2
php artisan migrate:fresh   # reset database
php artisan serve
```

Use the debugging workflow + AI tools to find and fix each bug.
