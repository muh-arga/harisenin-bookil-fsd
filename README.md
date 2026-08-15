# TaskKu — Latihan Memperbaiki Error dengan AI (Session 1)

Mini project untuk **Harisenin BooKil - Full Stack Web Developer** (Agustus 2026).

Branch ini berisi enam error sederhana. Setiap error akan menampilkan pesan error
Laravel beserta nama file dan nomor baris yang bermasalah. Peserta cukup menyalin
informasi tersebut ke AI chat, meminta perbaikan, lalu menerapkannya secara manual
di code editor.

Latihan ini tidak memerlukan automated test atau proses debugging yang rumit.

## Misi Latihan

Selesaikan enam langkah berikut secara berurutan:

1. Buka halaman daftar task.
2. Tambahkan task baru.
3. Buka halaman edit task.
4. Simpan perubahan task.
5. Ubah status task menjadi selesai atau belum selesai.
6. Hapus task.

Setiap langkah akan menampilkan satu error. Setelah error diperbaiki, ulangi
aksi yang sama. Jika sudah berhasil, lanjutkan ke langkah berikutnya.

## Cara Meminta Bantuan AI

AI yang digunakan adalah AI chat biasa seperti ChatGPT free tier. AI tidak dapat
melihat project atau mengubah file secara otomatis.

Pada halaman error Laravel, salin:

- judul atau pesan error;
- nama file dan nomor baris;
- potongan kode yang ditandai; dan
- aksi yang dilakukan sebelum error muncul.

Gunakan prompt berikut:

```text
Saya sedang belajar Laravel 12 dan menemukan error berikut ketika
[jelaskan aksi yang dilakukan]:

[tempel pesan error]

Laravel menunjukkan error pada file [nama file] baris [nomor baris]:

[tempel potongan kode]

Jelaskan kesalahannya dan berikan perbaikan paling sederhana. Sebutkan bagian
kode yang perlu saya ubah secara manual.
```

Setelah menerima jawaban AI:

1. Baca penjelasannya.
2. Pastikan file dan baris yang dibahas sesuai dengan halaman error.
3. Ubah kode secara manual melalui code editor.
4. Simpan file dan ulangi aksi yang sama di browser.

> Jangan mengirim isi `.env`, password database, API key, atau informasi rahasia
> lainnya ke AI chat.

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
| `session-1-exercise` | Latihan 6 error dengan AI chat |
| `session-2`  | Latihan membuat fitur dengan AI chat |

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

# 2. Switch to exercise branch
git checkout session-1-exercise

# 3. Install PHP dependencies
composer install

# 4. Copy environment file
cp .env.example .env

# 5. Generate app key
php artisan key:generate

# 6. Create MySQL database on phpMyadmin or via command line:
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
