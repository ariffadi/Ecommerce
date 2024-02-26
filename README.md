# README

## Instruksi Menjalankan Situs Web

1. **Clone Repositori**: Lakukan clone repositori ini ke mesin lokal Anda.
    ```bash
    git clone [URL_Repo]
    ```

2. **Masuk ke Direktori Proyek**: 
    ```bash
    cd nama_proyek

3 **Jalankan code Editor**
    ```bash
    cd code .
    ```
    
4. **composer install**
    ```bash
    composer install
    ```
    
5. Setup Environment:

    -Duplikat file .env.example menjadi .env atau bisa menjalankan perintah: cp .env.example .env

    -Konfigurasi database didalam file .env Ubah DB_DATABASE menjadi : app_eccomerce

    -Buat Database di PhpmyAdmin dengan penamaan 'app_eccomerce' lalu buka database yang baru di buat dan import database yang bernama 'app_eccomerce.sql' yang berada di file paling luar di folder ini
   
    
6 **Generet Kunci Aplikasi**: 
 ```bash
   php artisan key:generate
 ```


7 **Jalankan server Pembangun**: 
 ```bash
   php artisan serve
 ```
##Issue
masalah yang terjadi adalah role pada bagian admin untuk mengakses admin,tidak berjalan baik.

##daftar akun yang telah terdaftar
Pastikan untuk mengikuti panduan ini dengan seksama untuk memastikan situs web berjalan dengan baik.
Daftar yang telah terdaftar sebagai User dan Admin (Issue)
Akun User: user@gmail.com Password: 12345

Jika ingin menggunakan akunn lain maka harus register terlebih dahulu

Akun Admin: user@gmail.com Password: 12345
## Kontak

Jika Anda memiliki pertanyaan atau memerlukan bantuan tambahan, silakan hubungi kami melalui email di internship@example.com.

Terima kasih,
Tim Pengembangan Proyek
