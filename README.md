<h2>Data Diri</h2>
Nama : Muhammad Majdi <br>
Perguruan Tinggi : Universitas Lambung Mangkurat <br>
Program Studi : Teknologi Informasi<br>
Alamat : Kec. Karang Intan Kab. Banjar, Kalimantan Selatan <br>
Nomor Telepon (WA) : 0882 4541 1080 <br>
Email : mhdmajdi2108@gmail.com

<h2>Proses Installasi Sistem</h2>
<b>Pastikan Anda telah menginstal PHP, Composer, dan MySQL di komputer Anda. Jika belum, Anda perlu menginstalnya terlebih dahulu.</b> <br>
<br>

1. Buka terminal atau command prompt dan arahkan ke direktori tempat Anda ingin menyimpan proyek Laravel.
2. Buka repositori proyek Laravel di GitHub yang ingin Anda jalankan oleh orang lain. Salin URL repositori.
3. Di terminal atau command prompt, jalankan perintah berikut untuk mengklon repositori ke komputer Anda:

<pre><code class="language-bash">git clone &lt;![Screenshot 2023-07-13 072403](https://github.com/Morfz/yhc-laravel-webdev/assets/100391684/77cef9d4-278f-4f5b-965e-952d9c563a65)
![Uploading Screenshot 2023-07-13 072347.png…]()
URL_REPOSITORY&gt;</code></pre>

4. Gantilah <URL_REPOSITORY> dengan URL repositori yang Anda salin sebelumnya. Perintah ini akan mengunduh repositori ke komputer Anda.
5. Setelah repositori berhasil diklon, masuk ke direktori proyek Laravel dengan menjalankan perintah berikut:

<pre><code class="language-bash"![Screenshot 2023-07-13 072403](https://github.com/Morfz/yhc-laravel-webdev/assets/100391684/7cd7f016-62b5-43e3-b9c0-5649cb979303)
![Uploading Screenshot 2023-07-13 072347.png…]()
>cd &lt;NAMA_DIREKTORI&gt;</code></pre>

6. Gantilah <NAMA_DIREKTORI> dengan nama direktori proyek yang telah diunduh.
7. Selanjutnya, jalankan perintah berikut untuk menginstal dependensi proyek Laravel:

<pre><code class="language-bash">composer install</code></pre>

8. Perintah ini akan mengunduh dan menginstal semua dependensi yang diperlukan oleh proyek Laravel.
9. Salin file .env.example dan ubah namanya menjadi .env:

<pre><code class="language-bash">cp .env.example .env</code></pre>

10. Kemudian, buka file .env dan konfigurasikan pengaturan database sesuai dengan lingkungan Anda (nama database, pengguna, kata sandi, dll.).
11. Generate kunci aplikasi Laravel dengan menjalankan perintah berikut:

<pre><code class="language-bash">php artisan key:generate</code></pre>

12. Perintah ini akan menghasilkan kunci unik yang diperlukan untuk menjalankan aplikasi Laravel.
13. Buka localhost pada PHPMyAdmin
14. Buat database baru dengan nama yhc_courses (case sensitive)
15. Pada database tersebut, import file di project yang sudah di clone <b>( yhc_courses.sql )</b>
16. Setelah itu, jalankan perintah migrasi untuk membuat tabel-tabel yang diperlukan di database:

<pre><code class="language-bash">php artisan migrate</code></pre>

17. Perintah ini akan menjalankan semua migrasi yang ditemukan di proyek Laravel.
18. Terakhir, Anda dapat menjalankan server pengembangan Laravel dengan perintah:

<pre><code class="language-bash">php artisan serve</code></pre>

Server pengembangan akan dijalankan dan Anda dapat mengakses aplikasi Laravel melalui browser dengan alamat http://localhost:8000 atau sesuai dengan yang ditampilkan di terminal.

<h2> Login Admin </h2>
<br>email : admin@gmail.com
<br>password : 12345678

<h2> Preview </h2>

<h4>
  Aplikasi ini menggunakan Laravel sebagai Backend Framework, Tailwind sebagai CSS Framework, dan MySQL<br>
</h4>

![welcome](https://github.com/Morfz/yhc-laravel-webdev/assets/100391684/8e9bb8d7-3064-4f72-9076-c5b551b87106)
![login](https://github.com/Morfz/yhc-laravel-webdev/assets/100391684/3209d05e-46ab-4ec6-99e9-92167483a4ce)
![halaman-beranda](https://github.com/Morfz/yhc-laravel-webdev/assets/100391684/069401de-3e34-468b-8401-e55f5d335d8b)
![halaman-kursus](https://github.com/Morfz/yhc-laravel-webdev/assets/100391684/4c563dae-8d39-4ddd-a49d-60a47caff9be)
![halaman-detail-kursus](https://github.com/Morfz/yhc-laravel-webdev/assets/100391684/2e635cdb-7f0b-4174-b58e-3235fbccb687)
