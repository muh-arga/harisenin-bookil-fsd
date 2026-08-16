# TaskKu — Latihan Memperbaiki Error dengan AI (Session 1)

Mini project untuk **Harisenin BooKil - Full Stack Web Developer** (Agustus 2026).

Branch ini berisi 6 error yang umum ditemukan pada project Laravel. Peserta dapat
menyalin pesan error ke AI chat, tetapi wajib menyebutkan teknologi yang sedang
digunakan. Pesan error yang sama dapat memiliki solusi berbeda pada Laravel,
CodeIgniter, Symfony, JavaScript, atau PHP tanpa framework.

Teknologi pada project ini:

- Laravel 12
- PHP 8.3
- Blade
- Eloquent ORM
- MySQL
- Bootstrap 5

## To Do

Selesaikan 6 langkah berikut secara berurutan:

1. Buka halaman daftar task.
2. Tambahkan task baru.
3. Buka halaman edit task.
4. Simpan perubahan task.
5. Ubah status task menjadi selesai atau belum selesai.
6. Hapus task.

Setiap langkah akan menampilkan satu error. Setelah error diperbaiki, ulangi
aksi yang sama. Jika sudah berhasil, lanjutkan ke langkah berikutnya.

## Mengapa Konteks Teknologi Penting?

Prompt berikut terlalu umum:

```text
Saya mendapat error 419 Page Expired. Bagaimana cara memperbaikinya?
```

AI belum mengetahui framework, jenis request, atau cara form dibuat. Jawabannya
dapat menjadi terlalu umum dan belum tentu dapat diterapkan pada project ini.

Prompt yang lebih baik menyebutkan teknologi:

```text
Saya menggunakan Laravel 12 dengan Blade. Ketika mengirim form POST, muncul
error 419 Page Expired. Apa penyebab yang paling umum dan bagian Blade apa yang
perlu saya periksa?
```

Dengan konteks tersebut, AI dapat memberikan jawaban yang sesuai dengan konsep
CSRF dan syntax Blade pada Laravel.

## Cara Meminta Bantuan AI

Pada halaman error, salin:

- judul atau pesan error;
- nama file dan nomor baris;
- potongan kode yang ditandai; dan
- aksi yang dilakukan sebelum error muncul.

Gunakan prompt berikut. Bagian **teknologi** wajib diisi:

```text
Teknologi yang saya gunakan:
- Laravel 12
- PHP 8.3
- Blade dan Eloquent ORM
- MySQL

Saya menemukan error berikut ketika [jelaskan aksi yang dilakukan]:

[tempel pesan error]

Error ditampilkan pada file [nama file] baris [nomor baris]:

[tempel potongan kode]

Jelaskan arti error tersebut dalam konteks Laravel. Berikan penyebab yang paling
mungkin dan perbaikan Laravel paling sederhana. Sebutkan file atau bagian kode
yang perlu saya periksa. Jangan berikan solusi untuk framework lain.
```

Setelah menerima jawaban AI:

1. Baca penjelasannya.
2. Pastikan file dan baris yang dibahas sesuai dengan halaman error.
3. Ubah kode secara manual melalui code editor.
4. Simpan file dan ulangi aksi yang sama di browser.

> Jangan mengirim isi `.env`, password database, API key, atau informasi rahasia
> lainnya ke AI chat.
