<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - RAMZI FARHAN PRATAMA</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .cv-container {
            background-color: rgba(32, 124, 55, 0.75);
            padding: 40px;
            border-radius: 10px;
            margin-top: 50px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }

        .profile-img {
            width: 113px;
            height: 170px;
            object-fit: cover;
            border-radius: 5px;
            border: 4px solid white;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        .section-title {
            margin-top: 30px;
            margin-bottom: 15px;
            font-weight: bold;
            border-bottom: 1px solid white;
            display: inline-block;
            padding-bottom: 5px;
        }

        .experience, .education {
            text-align: left;
            margin-top: 15px;
        }

        .experience-item, .education-item {
            margin-bottom: 15px;
        }

        .experience-item h5, .education-item h5 {
            margin-bottom: 5px;
        }

        .experience-item small, .education-item small {
            font-style: italic;
            color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="cv-container text-center">
            
            <!-- Foto Profil -->
            <img src="{{ asset('storage/RamziFarhanPratama.JPG') }}"
                 alt="Foto Profil"
                 class="profile-img mb-4">

            <h2 class="text-2xl font-bold">Ramzi Farhan Pratama</h2>
            <p class="lead">Web Developer | Mobile Developer | Designer</p>

            <!-- Tentang Saya -->
            <h3 class="section-title">Tentang Saya</h3>
            <p>
                Halo! Saya adalah pengembang web yang memiliki semangat tinggi dalam membangun aplikasi yang bersih, responsif, dan user-friendly. Saya suka bekerja dengan Laravel, serta tertarik dalam desain antarmuka yang intuitif.
            </p>

            <!-- Pengalaman -->
            <h3 class="section-title">Pengalaman</h3>
            <div class="experience text-start">
                <div class="experience-item">
                    <h5>UI UX design dan frontend</h5>
                    <small>September 2023 - Desember 2023</small>
                    <p>Membangun aplikasi desktop April Catering untuk UMKM Nganjuk.</p>
                </div>
                <div class="experience-item">
                    <h5>Software Engineer</h5>
                    <small>Februari 2024 - Mei 2024</small>
                    <p>Sebagai frontend developer pengembangan aplikasi counter HandPhone daerah Sukomoro Nganjuk.</p>
                </div>
                <div class="experience-item">
                    <h5>Mobile Developer Android</h5>
                    <small>September 2024 - Desember 2024</small>
                    <p>Sebagai pengembang aplikasi Android untuk perpustakaan daerah Kabupaten Nganjuk, Yaitu PerPus Dig Nganjuk</p>
                </div>
                <div class="experience-item">
                    <h5>Mobile Developer Flutter</h5>
                    <small>Februari 2025 - Mei 2025</small>
                    <p>Membangun aplikasi SiTani untuk Dinas Pertanian Kabupaten Nganjuk, bagi penyuluh tani setiap daerah</p>
                </div>
                <div class="experience-item">
                    <h5>Web Developer Laravel</h5>
                    <small>Maret 2025 - Sekarang</small>
                    <p>Mengambangkan website E-Learning untuk sekolah menengah pertama</p>
                </div>
            </div>

            <!-- Keahlian -->
            <h3 class="section-title">Keahlian</h3>
            <ul class="list-unstyled">
                <li>✔ Menguasai bahasa Java, PHP, JS, dan Dart</li>
                <li>✔ Bisa menggunakan Framework Flutter dan Laravel</li>
                <li>✔ Database MySQL dan bisa cloud Firebase</li>
                <li>✔ UI/UX Design dengan Figma</li>
                <li>✔ Menguasai bahasa Indonesia lancar</li>
                <li>✔ Menguasai bahasa Asing: Bahasa Inggris</li>
            </ul>

            <!-- Pendidikan -->
            <h3 class="section-title">Pendidikan</h3>
            <div class="education text-start">
                <div class="education-item">
                    <h5>SMA Negeri 1 Patianrowo, Nganjuk</h5>
                    <small>2020 - 2023</small>
                    <p>Jurusan Ilmu Pengetahuan Sosial</p>
                </div>
                <div class="education-item">
                    <h5>Politeknik Negeri Jember - Teknologi Informasi</h5>
                    <small>2023 - Sekarang</small>
                    <p>Mahasiswa aktif program studi Teknik Informatika PSDKU Nganjuk</p>
                </div>
            </div>

            <!-- Kontak -->
            <h3 class="section-title">Kontak</h3>
            <p>Email: ramzifarhan156@email.com<br>Nomor WA: 0895-7065-67010</p>

        </div>
    </div>
</body>
</html>
