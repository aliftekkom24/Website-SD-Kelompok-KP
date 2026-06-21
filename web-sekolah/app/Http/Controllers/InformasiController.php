<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Pengumuman;

class InformasiController extends Controller
{
    /**
     * Panel informasi: berita (kartu) + pengumuman (daftar/modal).
     */
    public function index()
    {
        $berita = Berita::where('is_active', true)
            ->orderByDesc('tanggal')
            ->orderByDesc('id')
            ->get();

        $pengumuman = Pengumuman::where('is_active', true)
            ->orderByDesc('penting')
            ->orderByDesc('tanggal')
            ->orderByDesc('id')
            ->get();

        return view('informasi.index', compact('berita', 'pengumuman'));
    }

    /**
     * Galeri foto: kartu foto yang menampilkan keterangan saat diklik.
     */
    public function galeri()
    {
        $galeri = Galeri::where('is_active', true)
            ->orderBy('urutan')
            ->orderByDesc('tanggal')
            ->orderByDesc('id')
            ->get();

        // Kategori untuk panel filter (mis. Kegiatan, Ekstrakurikuler, Prestasi).
        $kategori = $galeri->pluck('kategori')
            ->filter()
            ->unique()
            ->sort()
            ->values();

        return view('informasi.galeri', compact('galeri', 'kategori'));
    }
}
