# TaskKu — Latihan Memperbaiki Error dengan AI (Session 1)

Mini project untuk **Harisenin BooKil - Full Stack Web Developer** (Agustus 2026).

Branch ini berisi 6 error sederhana. Setiap error akan menampilkan pesan error
Laravel beserta nama file dan nomor baris yang bermasalah.

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

## Cara Meminta Bantuan AI
Pada halaman error Laravel, salin:

- judul atau pesan error;
- nama file dan nomor baris;
- potongan kode yang ditandai; dan
- aksi yang dilakukan sebelum error muncul.

Gunakan prompt berikut:

```text
Saya menggunakan Laravel 12 dan menemukan error berikut ketika
[jelaskan aksi yang dilakukan]:

[tempel pesan error]

Laravel menunjukkan error pada file [nama file] baris [nomor baris]:

[tempel potongan kode]

Jelaskan kesalahannya dan berikan perbaikan paling sederhana. Sebutkan bagian
kode yang perlu saya ubah.
```

Setelah menerima jawaban AI:

1. Baca penjelasannya.
2. Pastikan file dan baris yang dibahas sesuai dengan halaman error.
3. Ubah kode secara manual melalui code editor.
4. Simpan file dan ulangi aksi yang sama di browser.

> Jangan mengirim isi `.env`, password database, API key, atau informasi rahasia
> lainnya ke AI chat.