@extends('layouts.app')

@section('title', 'Profil Sekolah')
@section('description', 'Profil lengkap SDN Dadapsari — sejarah, visi misi, transparansi dana BOS, dan fasilitas sekolah.')

@push('styles')
<style>
    .profil-hero {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 55%, #2a8aa3 100%);
        color: var(--white);
        padding: 4rem 1.5rem 6rem;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .profil-hero::before {
        content: '';
        position: absolute;
        width: 360px; height: 360px;
        border-radius: 50%;
        background: rgba(87,197,182,.12);
        top: -100px; right: -80px;
        filter: blur(12px);
    }
    .profil-hero::after {
        content: '';
        position: absolute;
        width: 260px; height: 260px;
        border-radius: 50%;
        background: rgba(255,255,255,.06);
        bottom: -80px; left: -60px;
        filter: blur(8px);
    }
    .profil-hero-inner { position: relative; z-index: 1; max-width: 680px; margin: 0 auto; }
    .profil-hero .eyebrow { color: var(--accent); }
    .profil-hero h1 { font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; margin: .5rem 0 .8rem; }
    .profil-hero p { color: rgba(255,255,255,.82); font-size: 1.05rem; }
    .profil-hero-logo {
        width: 80px; height: 80px;
        object-fit: contain;
        margin-bottom: 1.5rem;
        filter: drop-shadow(0 4px 12px rgba(0,0,0,.3));
    }

    .profil-wrap {
        max-width: 1100px;
        margin: -4rem auto 5rem;
        padding: 0 1.5rem;
    }

    .profil-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .profil-card {
        background: var(--white);
        border-radius: var(--radius);
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        display: flex;
        flex-direction: column;
        transition: transform .28s ease, box-shadow .28s ease;
        border-top: 5px solid var(--accent);
    }
    .profil-card:hover { transform: translateY(-6px); box-shadow: 0 28px 60px rgba(0,43,91,.18); }

    .profil-card-img {
        height: 180px;
        overflow: hidden;
        position: relative;
    }
    .profil-card-img img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform .4s ease;
    }
    .profil-card:hover .profil-card-img img { transform: scale(1.06); }
    .profil-card-img-overlay {
        position: absolute; inset: 0;
        display: flex; align-items: flex-end;
        padding: 1rem 1.25rem;
        background: linear-gradient(to top, rgba(0,43,91,.6) 0%, transparent 60%);
    }

    .profil-card-body { padding: 1.5rem 1.75rem; flex: 1; }
    .profil-card-label {
        display: inline-block;
        font-size: .72rem; font-weight: 700;
        text-transform: uppercase; letter-spacing: .6px;
        padding: .2rem .75rem;
        border-radius: 50px;
        margin-bottom: .75rem;
    }
    .profil-card h3 { font-size: 1.25rem; font-weight: 700; color: var(--primary-dark); margin-bottom: .5rem; }
    .profil-card p { font-size: .9rem; color: var(--muted); line-height: 1.6; margin-bottom: 1.25rem; }
    .profil-card-cta {
        display: inline-flex; align-items: center; gap: .4rem;
        font-size: .85rem; font-weight: 700; color: var(--primary);
        transition: gap .2s;
    }
    .profil-card:hover .profil-card-cta { gap: .7rem; }

    /* Warna per kartu */
    .card-sejarah   { border-top-color: #f59e0b; }
    .card-sejarah   .profil-card-label { background: #fef3c7; color: #92400e; }
    .card-sejarah   .profil-card-cta   { color: #d97706; }

    .card-visimisi  { border-top-color: #6366f1; }
    .card-visimisi  .profil-card-label { background: #ede9fe; color: #4338ca; }
    .card-visimisi  .profil-card-cta   { color: #4f46e5; }

    .card-bos       { border-top-color: #10b981; }
    .card-bos       .profil-card-label { background: #d1fae5; color: #065f46; }
    .card-bos       .profil-card-cta   { color: #059669; }

    .card-fasilitas { border-top-color: var(--accent); }
    .card-fasilitas .profil-card-label { background: var(--accent-soft); color: var(--primary); }
    .card-fasilitas .profil-card-cta   { color: var(--primary); }

    /* Banner foto sekolah */
    .profil-school-banner {
        margin-bottom: 2rem;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        position: relative;
        height: 240px;
    }
    .profil-school-banner img {
        width: 100%; height: 100%;
        object-fit: cover;
    }
    .profil-school-banner-text {
        position: absolute; inset: 0;
        display: flex; flex-direction: column;
        justify-content: flex-end;
        padding: 1.5rem 2rem;
        background: linear-gradient(to top, rgba(0,43,91,.75) 0%, transparent 55%);
        color: #fff;
    }
    .profil-school-banner-text h2 { font-size: 1.4rem; font-weight: 800; }
    .profil-school-banner-text p { font-size: .88rem; color: rgba(255,255,255,.8); }

    @media (max-width: 700px) {
        .profil-grid { grid-template-columns: 1fr; }
        .profil-card-img { height: 150px; }
    }
</style>
@endpush

@section('content')

<section class="profil-hero">
    <div class="profil-hero-inner">
        <img src="/images/logo-sdn.png" alt="Logo SDN Dadapsari" class="profil-hero-logo">
        <span class="eyebrow">Tentang Kami</span>
        <h1>Profil Sekolah</h1>
        <p>Mengenal lebih dekat SDN Dadapsari — sekolah dasar berdiri sejak 1965 di Semarang Utara yang telah mencetak ribuan generasi unggul dan berkarakter.</p>
    </div>
</section>

<div class="profil-wrap">

    {{-- Banner Foto Sekolah --}}
    <div class="profil-school-banner">
        <img src="/images/sekolah-2.jpeg" alt="Suasana SDN Dadapsari">
        <div class="profil-school-banner-text">
            <h2>SDN Dadapsari</h2>
            <p>Jl. Petek No. 117-119, Kel. Dadapsari, Kec. Semarang Utara, Kota Semarang</p>
        </div>
    </div>

    <div class="profil-grid">

        {{-- Sejarah --}}
        <a href="{{ route('profil.sejarah') }}" class="profil-card card-sejarah">
            <div class="profil-card-img">
                <img src="/images/sekolah-1.jpeg" alt="Sejarah SDN Dadapsari">
                <div class="profil-card-img-overlay"></div>
            </div>
            <div class="profil-card-body">
                <span class="profil-card-label">Sejarah</span>
                <h3>Sejarah Sekolah</h3>
                <p>Berdiri sejak 1965 dengan nama SDN Mlayu Darat, kemudian berganti nama menjadi SDN Dadapsari mengikuti perubahan nama kelurahan setempat.</p>
                <span class="profil-card-cta">Baca Selengkapnya →</span>
            </div>
        </a>

        {{-- Visi & Misi --}}
        <a href="{{ route('profil.visi-misi') }}" class="profil-card card-visimisi">
            <div class="profil-card-img" style="background: linear-gradient(135deg, #4338ca, #6366f1); display:flex; align-items:center; justify-content:center;">
                <div style="text-align:center; color:#fff; padding:1rem;">
                    <div style="font-size:3.5rem; margin-bottom:.5rem;">🎯</div>
                    <div style="font-size:1rem; font-weight:600;">Visi &amp; Misi</div>
                </div>
            </div>
            <div class="profil-card-body">
                <span class="profil-card-label">Visi &amp; Misi</span>
                <h3>Visi &amp; Misi Sekolah</h3>
                <p>{{ $setting->visi ? '"' . \Illuminate\Support\Str::limit($setting->visi, 120) . '"' : 'Mewujudkan sekolah unggul yang menghasilkan peserta didik beriman, berprestasi, dan peduli lingkungan.' }}</p>
                <span class="profil-card-cta">Lihat Selengkapnya →</span>
            </div>
        </a>

        {{-- Transparansi Dana BOS --}}
        <a href="{{ route('profil.transparansi-dana-bos') }}" class="profil-card card-bos">
            <div class="profil-card-img" style="background: linear-gradient(135deg, #065f46, #10b981); display:flex; align-items:center; justify-content:center;">
                <div style="text-align:center; color:#fff; padding:1rem;">
                    <div style="font-size:3.5rem; margin-bottom:.5rem;">💰</div>
                    <div style="font-size:1rem; font-weight:600;">Transparansi Dana BOS</div>
                </div>
            </div>
            <div class="profil-card-body">
                <span class="profil-card-label">Dana BOS</span>
                <h3>Transparansi Dana BOS</h3>
                <p>Informasi penggunaan Dana Bantuan Operasional Sekolah secara terbuka dan akuntabel kepada seluruh masyarakat.</p>
                <span class="profil-card-cta">Lihat Detail →</span>
            </div>
        </a>

        {{-- Fasilitas --}}
        <a href="{{ route('profil.fasilitas') }}" class="profil-card card-fasilitas">
            <div class="profil-card-img">
                <img src="/images/sekolah-2.jpeg" alt="Fasilitas SDN Dadapsari">
                <div class="profil-card-img-overlay"></div>
            </div>
            <div class="profil-card-body">
                <span class="profil-card-label">Fasilitas</span>
                <h3>Fasilitas Sekolah</h3>
                <p>Perpustakaan, laboratorium komputer, lapangan olahraga, UKS, dan ruang kelas yang nyaman serta kondusif untuk belajar.</p>
                <span class="profil-card-cta">Lihat Fasilitas →</span>
            </div>
        </a>

    </div>
</div>

@endsection
