<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Website SD</title>
    <style>
        /* Reset Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
        }

        /* Styling Utama Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1a5f7a;
            /* Warna biru khas pendidikan */
            padding: 0 2rem;
            height: 70px;
            position: relative;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            color: #ffffff;
            font-size: 1.4rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* Menu Utama */
        .nav-links {
            display: flex;
            list-style: none;
            height: 100%;
        }

        .nav-links>li {
            position: relative;
            height: 100%;
        }

        .nav-links a {
            display: flex;
            align-items: center;
            color: #ffffff;
            text-decoration: none;
            padding: 0 1.2rem;
            height: 100%;
            transition: background 0.3s ease, color 0.3s ease;
            font-size: 1rem;
        }

        .nav-links>li>a:hover {
            background-color: #57c5b6;
            /* Warna accent saat hover */
            color: #002b5b;
        }

        /* Dropdown Tingkat 1 (Berundak) */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            min-width: 200px;
            list-style: none;
            display: none;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            border-radius: 0 0 4px 4px;
        }

        .dropdown-menu li {
            position: relative;
            border-bottom: 1px solid #f0f0f0;
        }

        .dropdown-menu li:last-child {
            border-bottom: none;
        }

        .dropdown-menu a {
            color: #333333;
            padding: 0.8rem 1.2rem;
            display: block;
            height: auto;
        }

        .dropdown-menu a:hover {
            background-color: #f4f6f9;
            color: #1a5f7a;
            padding-left: 1.5rem;
            /* Efek geser sedikit saat di-hover */
        }

        /* Logika Hover untuk Memunculkan Menu */
        .nav-links li:hover>.dropdown-menu {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        /* Panah Indikator Dropdown */
        .dropdown>a::after {
            content: ' ▾';
            font-size: 0.8rem;
            margin-left: 5px;
        }

        /* Animasi Transisi Halus */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">SDN NUSANTARA</div>

        <ul class="nav-links">
            <li><a href="#beranda">Beranda</a></li>

            <!-- Dropdown Profil -->
            <li class="dropdown">
                <a href="#profil">Profil</a>
                <ul class="dropdown-menu">
                    <li><a href="#sejarah">Sejarah</a></li>
                    <li><a href="#visi-misi">Visi & Misi</a></li>
                    <li><a href="#struktur">Struktur Organisasi</a></li>
                    <li><a href="#fasilitas">Fasilitas</a></li>
                </ul>
            </li>

            <!-- Dropdown Akademik -->
            <li class="dropdown">
                <a href="#akademik">Akademik</a>
                <ul class="dropdown-menu">
                    <li><a href="#kurikulum">Kurikulum</a></li>
                    <li><a href="#kalender">Kalender Akademik</a></li>
                    <li><a href="#guru">Guru & Staf</a></li>
                </ul>
            </li>

            <!-- Dropdown Kesiswaan -->
            <li class="dropdown">
                <a href="#kesiswaan">Kesiswaan</a>
                <ul class="dropdown-menu">
                    <li><a href="#ekstrakurikuler">Ekstrakurikuler</a></li>
                    <li><a href="#prestasi">Prestasi Siswa</a></li>
                    <li><a href="#tata-tertib">Tata Tertib</a></li>
                </ul>
            </li>

            <!-- Dropdown Informasi -->
            <li class="dropdown">
                <a href="#informasi">Informasi</a>
                <ul class="dropdown-menu">
                    <li><a href="#berita">Berita & Pengumuman</a></li>
                    <li><a href="#ppdb">PPDB</a></li>
                    <li><a href="#galeri">Galeri Foto</a></li>
                </ul>
            </li>

            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>

</body>

</html>
