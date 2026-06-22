@extends('layouts.app')

@section('title', 'Sejarah Sekolah')
@section('description', 'Sejarah berdiri dan perkembangan SDN Dadapsari dari masa ke masa.')

@push('styles')
<style>
    .page-header {
        position: relative;
        background: linear-gradient(135deg, #78350f 0%, #b45309 55%, #d97706 100%);
        color: var(--white);
        padding: 3.5rem 1.5rem 5rem;
        text-align: center;
        overflow: hidden;
    }
    .page-header-bg {
        position: absolute; inset: 0;
        background-image: url('/images/sekolah-1.jpeg');
        background-size: cover; background-position: center;
        opacity: .18;
    }
    .page-header-inner { position: relative; z-index: 1; }
    .page-header .eyebrow { background: rgba(255,255,255,.18); color: #fde68a; border: 1px solid rgba(255,255,255,.3); padding: .3rem .9rem; border-radius:50px; font-size:.8rem; font-weight:700; letter-spacing:1px; text-transform:uppercase; display:inline-block; margin-bottom:.6rem; }
    .page-header h1 { font-size: clamp(1.8rem, 4vw, 2.6rem); font-weight: 800; margin: .4rem 0 .6rem; }
    .page-header p  { max-width: 620px; margin: 0 auto; color: rgba(255,255,255,.8); }

    .sejarah-wrap { max-width: 860px; margin: -3rem auto 4rem; padding: 0 1.25rem; }

    .sejarah-card {
        background: var(--white);
        border-radius: var(--radius);
        box-shadow: var(--shadow-lg);
        padding: 2.5rem;
    }

    .sejarah-card p { line-height: 1.85; color: var(--text); margin-bottom: 1.2rem; font-size: .97rem; }
    .sejarah-card p:last-child { margin-bottom: 0; }

    .sejarah-section-title {
        font-size: 1.15rem; font-weight: 700; color: var(--primary-dark);
        border-bottom: 2px solid var(--accent-soft); padding-bottom: .6rem; margin: 2rem 0 1rem;
    }

    .timeline {
        border-left: 3px solid var(--accent);
        margin: 2rem 0;
        padding-left: 1.75rem;
        display: flex; flex-direction: column; gap: 1.5rem;
    }
    .timeline-item { position: relative; }
    .timeline-item::before {
        content: ''; position: absolute; left: -2.1rem; top: .35rem;
        width: 12px; height: 12px; border-radius: 50%;
        background: var(--accent); border: 2px solid var(--white);
        box-shadow: 0 0 0 2px var(--accent);
    }
    .timeline-year { font-size: .78rem; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; color: var(--accent); margin-bottom: .25rem; }
    .timeline-item h4 { font-size: 1rem; color: var(--primary-dark); margin-bottom: .3rem; }
    .timeline-item p  { font-size: .9rem; color: var(--muted); margin: 0; }

    .back-link {
        display: inline-flex; align-items: center; gap: .4rem;
        font-size: .85rem; color: #fff; text-decoration: none;
        margin-bottom: 1.25rem; font-weight: 600;
        text-shadow: 0 1px 6px rgba(0,0,0,.35);
    }
    .back-link:hover { color: rgba(255,255,255,.75); }
</style>
@endpush

@section('content')

<section class="page-header">
    <div class="page-header-bg"></div>
    <div class="page-header-inner">
        <span class="eyebrow">Profil Sekolah</span>
        <h1>Sejarah SDN Dadapsari</h1>
        <p>Perjalanan panjang sebuah sekolah yang telah mencetak generasi penerus bangsa sejak 1965.</p>
    </div>
</section>

<div class="sejarah-wrap">
    <a href="{{ route('profil.index') }}" class="back-link">← Kembali ke Profil</a>

    <div class="sejarah-card">

        {{-- Paragraf Pengantar --}}
        @if ($setting->sejarah_intro)
            @foreach (array_filter(explode("\n\n", $setting->sejarah_intro)) as $para)
                <p>{{ trim($para) }}</p>
            @endforeach
        @endif

        {{-- Timeline --}}
        @if (!empty($setting->sejarah_timeline))
            <div class="sejarah-section-title">Perjalanan Sekolah</div>
            <div class="timeline">
                @foreach ($setting->sejarah_timeline as $item)
                    <div class="timeline-item">
                        @if (!empty($item['tahun']))
                            <div class="timeline-year">{{ $item['tahun'] }}</div>
                        @endif
                        @if (!empty($item['judul']))
                            <h4>{{ $item['judul'] }}</h4>
                        @endif
                        @if (!empty($item['deskripsi']))
                            <p>{{ $item['deskripsi'] }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Paragraf Komitmen --}}
        @if ($setting->sejarah_komitmen)
            <div class="sejarah-section-title">Komitmen Kami</div>
            @foreach (array_filter(explode("\n\n", $setting->sejarah_komitmen)) as $para)
                <p>{{ trim($para) }}</p>
            @endforeach
        @endif

    </div>
</div>

@endsection
