# Studentok 🎓📝

Studentok adalah aplikasi web berbasis **Laravel** yang berfungsi sebagai **Quiz Generator berbasis AI**. Website ini memungkinkan pengguna untuk membuat kuis secara otomatis dari materi pembelajaran menggunakan teknologi **AI melalui OpenRouter API**, tanpa perlu sistem login maupun registrasi.

Project ini ditujukan untuk memudahkan pembuatan soal latihan, evaluasi pembelajaran, atau kuis umum dengan proses yang cepat, fleksibel, dan mudah digunakan.

---

## 🚀 Fitur Utama

### 1. Quiz Generator Berbasis AI

* User dapat memasukkan **materi pembelajaran** melalui:

  * Text area (teks bebas)
  * Upload file materi (misalnya PDF atau dokumen pembelajaran)
* Sistem akan mengirimkan materi tersebut ke **AI (OpenRouter API)**
* AI akan menghasilkan soal-soal kuis secara otomatis

### 2. Preview Quiz

* Sebelum dipublikasikan, user dapat:

  * Melihat **preview soal** yang dihasilkan AI
  * Mengecek apakah soal sudah sesuai atau belum
* User dapat memutuskan untuk:

  * Melanjutkan ke tahap **Publish**

### 3. Publish Quiz

* Quiz yang telah disetujui akan dipublikasikan
* Quiz akan masuk ke daftar kuis yang dapat dikerjakan oleh semua user

### 4. Try Quiz (Tanpa Login & Register)

* Semua user dapat mengakses halaman **Try Quiz** tanpa akun
* Halaman ini berisi:

  * Daftar quiz yang tersedia
* Saat memilih quiz, akan muncul **popup modal konfirmasi**:

  * Lanjut mengerjakan quiz
  * Atau membatalkan

### 5. Pengerjaan Quiz

* User akan diarahkan ke halaman soal
* User menjawab semua pertanyaan hingga selesai

### 6. Sistem Penilaian (Score)

* Setelah quiz selesai:

  * Sistem akan menghitung skor secara otomatis
  * User dapat langsung melihat hasil nilai

---

## 🧠 Alur Sistem (Flow Aplikasi)

1. User mengunjungi website Studentok
2. Masuk ke halaman **Quiz Generator**
3. User:

   * Menulis materi pembelajaran **atau**
   * Mengunggah file materi
4. Sistem mengirim data ke **OpenRouter AI API**
5. AI menghasilkan soal kuis
6. User melihat **preview quiz**
7. User menekan tombol **Publish**
8. Quiz muncul di halaman **Try Quiz**
9. User memilih quiz → muncul modal konfirmasi
10. User mengerjakan quiz
11. Setelah selesai, sistem menampilkan **score**

---

## 🛠️ Teknologi yang Digunakan

* **Backend**: Laravel
* **Frontend**: Blade Template / Tailwind CSS
* **AI API**: OpenRouter AI
* **Database**: MySQL
* **UI Components**: Modal & Interactive Components

---

## 📌 Konsep Tanpa Akun

Studentok dirancang **tanpa sistem login dan registrasi**, sehingga:

* User dapat langsung menggunakan fitur
* Tidak ada penyimpanan data personal user
* Fokus pada kemudahan akses dan penggunaan

---

## 📂 Struktur Fitur Utama

* Quiz Generator
* AI Question Generator
* Quiz Preview
* Quiz Publishing
* Try Quiz
* Score System

---

## 📈 Tujuan Project

* Mempermudah pembuatan soal berbasis materi pembelajaran
* Memanfaatkan AI untuk pendidikan
* Menyediakan platform latihan soal yang cepat dan praktis

---

## ⚠️ Catatan

* Kualitas soal sangat bergantung pada materi yang diberikan
* Pastikan materi jelas agar hasil soal lebih optimal

---

## 📄 Lisensi

Project ini dibuat untuk keperluan pembelajaran dan pengembangan. Lisensi dapat disesuaikan sesuai kebutuhan pengembang.

---

✨ **Studentok – Generate Quiz Smarter with AI**
