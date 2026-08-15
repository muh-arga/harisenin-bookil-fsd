# TaskKu — Pengembangan Fitur dengan Bantuan AI (Session 2)

Mini project untuk **Harisenin BooKil - Full Stack Web Developer** (Agustus 2026).

## Kondisi Awal

TaskKu sudah memiliki fitur berikut:

- Menampilkan daftar task.
- Menambahkan task dengan judul dan deskripsi.
- Mengubah task.
- Menandai task selesai atau belum selesai.
- Menghapus task.

## Mini Project

Kembangkan TaskKu dengan fitur-fitur berikut.

### 1. Prioritas Task

Setiap task memiliki salah satu prioritas berikut:

- `low` — rendah
- `medium` — sedang
- `high` — tinggi

Prioritas dipilih ketika task dibuat atau diubah. Tampilkan prioritas sebagai
badge Bootstrap dengan warna yang mudah dibedakan.

### 2. Due Date

Task dapat memiliki due date (`due_date`). Due date bersifat opsional,
sehingga task tetap dapat dibuat tanpa tanggal tersebut.

Tampilkan due date pada daftar task dan halaman edit.

### 3. Indikator Terlambat

Task dianggap terlambat ketika:

- memiliki due date sebelum hari ini, dan
- statusnya belum selesai.

Berikan indikator visual `Terlambat` pada task tersebut. Task yang sudah selesai
tidak boleh ditandai terlambat.

### 4. Pencarian

Tambahkan pencarian berdasarkan judul task. Pencarian harus tetap bekerja ketika
digabungkan dengan filter lain.

### 5. Filter

Pengguna dapat memfilter daftar berdasarkan:

- status: semua, belum selesai, atau selesai; dan
- prioritas: semua, rendah, sedang, atau tinggi.

Ketika hasil filter kosong, tampilkan pesan yang mudah dipahami.

## Urutan Pengerjaan yang Disarankan

Kerjakan satu bagian kecil sampai selesai sebelum melanjutkan:

1. Pelajari alur CRUD TaskKu yang sudah ada.
2. Buat migration untuk `priority` dan `due_date`.
3. Perbarui model, validasi, dan proses penyimpanan.
4. Perbarui form tambah dan edit.
5. Tampilkan badge prioritas, due date, dan indikator terlambat.
6. Tambahkan pencarian dan filter pada controller.
7. Tambahkan form pencarian dan filter pada view.
8. Uji setiap fitur secara langsung melalui browser.

## Cara Menggunakan AI

Gunakan alur berikut untuk setiap tahap:

1. Jelaskan teknologi, kondisi aplikasi, dan satu tujuan yang ingin dikerjakan.
2. Cari file yang berhubungan dengan tujuan tersebut melalui code editor.
3. Salin isi file atau bagian kode yang relevan ke AI chat.
4. Minta AI menjelaskan rencana atau perubahan sebelum memberikan kode.
5. Salin perubahan yang disarankan ke code editor secara manual.
6. Jalankan command yang diperlukan melalui terminal secara manual.
7. Periksa hasilnya melalui browser.
8. Jika terjadi masalah, kirim langkah reproduksi, pesan error lengkap, dan kode
   terbaru kepada AI.
9. Lanjutkan ke tahap berikutnya hanya setelah tahap saat ini berhasil.

Jangan langsung meminta AI membuat seluruh fitur sekaligus. Percakapan bertahap
membuat perubahan lebih mudah diperiksa, dipahami, dan diperbaiki.

## Informasi yang Perlu Diberikan kepada AI

Sertakan informasi berikut sesuai kebutuhan:

- Framework dan versinya, misalnya Laravel 12 dan PHP 8.3.
- Tujuan fitur yang sedang dikerjakan.
- Struktur tabel atau isi migration yang berkaitan.
- Model, method controller, route, atau bagian Blade yang berkaitan.
- Command yang sudah dijalankan.
- Pesan error lengkap dan langkah untuk memunculkannya.
- Hasil yang diharapkan dan hasil yang sebenarnya terjadi.

Tidak perlu menyalin seluruh project. Mulai dari bagian yang paling relevan. Jika
konteksnya belum cukup, minta AI menyebutkan file tambahan yang perlu diperiksa.

### Prompt 1 — Membuat Rencana

```text
Saya memiliki aplikasi task manager sederhana menggunakan Laravel 12, Blade,
Bootstrap 5, dan MySQL. Fitur CRUD dasarnya sudah berjalan.

Saya ingin menambahkan [jelaskan satu fitur].

Sebutkan file yang kemungkinan perlu diperiksa dan urutan pengerjaannya.
Jelaskan alasan setiap langkah.
```

### Prompt 2 — Mengerjakan Satu Tahap

```text
Sekarang bantu saya mengerjakan tahap migration.

Berikut migration tabel tasks yang sekarang:
[tempel isi migration]

Buat dengan ikuti konvensi Laravel. Tampilkan kode yang
perlu saya tulis dan jelaskan fungsi setiap perubahan.
```

### Prompt 3 — Membantu Saat Terjadi Error

```text
Saya mengalami error ketika mencoba fitur berikut:

Langkah yang saya lakukan:
[jelaskan langkah untuk memunculkan error]

Hasil yang saya harapkan:
[jelaskan hasil yang diharapkan]

Pesan error lengkap:
[tempel pesan error]

Kode yang berkaitan:
[tempel kode terbaru]

Jelaskan masalahnya dan sarankan perbaikan sederhana. Jika konteksnya belum cukup, sebutkan file
atau informasi tambahan yang perlu saya kirim.
```

## Aturan Penggunaan AI

- Berikan konteks project dan tujuan fitur secara jelas.
- Kerjakan satu masalah atau satu tahap dalam setiap prompt.
- Jangan memasukkan password, API key, atau isi `.env` ke dalam prompt.
- Jangan menganggap AI dapat melihat file atau terminal milik peserta.
- Salin kode dari AI ke editor secara manual, satu bagian dalam satu waktu.
- Baca dan pahami kode sebelum menerapkannya.
- Jangan menerima perubahan pada file yang tidak berkaitan tanpa alasan.
- Jalankan migration dan command lain sendiri melalui terminal.
- Periksa fitur melalui browser setelah setiap perubahan penting.
- Jika jawaban AI tidak sesuai, perbaiki prompt dengan konteks yang lebih jelas.
- Gunakan dokumentasi resmi ketika jawaban AI masih meragukan.
- Peserta bertanggung jawab atas seluruh kode yang digunakan.
