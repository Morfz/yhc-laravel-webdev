<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full flex space-x-4">
                <div class="w-1/2">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 my-4 mx-2">
                        <div class="p-6 text-gray-800">
                            <div class="card">
                                <h1 class="font-bold text-xl text-gray-900 leading-tight mt-4">Detail Pendaftar</h1>
                                <br>
                                <img src="./img/jid.png" alt="Muhammad" class="w-32 h-32 rounded-full mx-left">
                                <br>
                                <p class="my-2">Nama : Muhammad</p>
                                <p class="my-2">Perguruan Tinggi : Universitas Lambung Mangkurat</p>
                                <p class="my-2">Program Studi : Teknologi Informasi</p>
                                <p class="my-2">Alamat : Kec. Karang Intan Kab. Banjar, Kalimantan Selatan</p>
                                <p class="my-2">Nomor Telepon (WA) : 0882 4541 1080</p>
                                <p class="my-2">Email : mhdmajdi2108@gmail.com</p>
                                <br>
                                <h1 class="font-semibold text-xl text-gray-900 leading-tight">Teknologi yang digunakan</h1>
                                <br>
                                <p class="my-2">Laravel</p>
                                <p class="my-2">Tailwind CSS</p>
                                <p class="my-2">MySQL</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-1/2">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 my-4 mx-2">
                        <div class="p-6 text-gray-800">
                            <div class="card">
                                <h1 class="font-semibold text-xl text-gray-900 leading-tight">SOAL TES INTERNSHIP PROJECT YAYASAN HASNUR CENTRE DIVISI WEB DEVELOPER DIGITALIZ</h1>
                                <br>
                                <p class="my-2">Ardi adalah seorang admin platform online course yang membutuhkan aplikasi web sederhana untuk mengelola kursus dan materi. Aplikasi tersebut harus memiliki fitur CRUD (Create, Read, Update, Delete) dengan detail berikut:</p>
                                <br>
                                <p class="my-2">1. Membuat kursus baru dengan judul, deskripsi, dan durasi.</p>
                                <p class="my-2">2. Mengedit informasi kursus seperti judul, deskripsi, dan durasi.</p>
                                <p class="my-2">3. Menghapus kursus yang tidak relevan.</p>
                                <p class="my-2">4. Menambahkan materi ke dalam kursus dengan judul, deskripsi, dan link embed materi.</p>
                                <p class="my-2">5. Melihat daftar materi dalam sebuah kursus.</p>
                                <p class="my-2">6. Mengedit informasi materi seperti judul, deskripsi, dan link embed materi.</p>
                                <p class="my-2">7. Menghapus materi yang tidak relevan dalam sebuah kursus.</p>
                                <p class="my-2">8. Melihat daftar kursus beserta detailnya.</p>
                                <br>
                                <p class="my-2">Tugas Anda sebagai web developer adalah membuat aplikasi web sesuai dengan kebutuhan Ardi. Gunakan teknologi dan bahasa pemrograman yang Anda kuasai untuk menciptakan antarmuka yang responsif dan mudah digunakan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>