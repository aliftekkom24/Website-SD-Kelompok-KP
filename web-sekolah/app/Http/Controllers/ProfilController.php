<?php

namespace App\Http\Controllers;

use App\Models\SaranaPrasarana;
use App\Models\RuangKelas;
use App\Models\ProfilSetting;

class ProfilController extends Controller
{
    public function sejarah()
    {
        $setting = ProfilSetting::getData();
        return view('Profil.sejarah', compact('setting'));
    }

    public function visiMisi()
    {
        $setting = ProfilSetting::getData();
        return view('Profil.visi-misi', compact('setting'));
    }

    public function transparansiDanaBos()
    {
        $setting = ProfilSetting::getData();
        return view('Profil.transparansi-dana-bos', compact('setting'));
    }

    public function fasilitas()
    {
        $sarpras    = SaranaPrasarana::where('is_active', true)->orderBy('urutan')->orderBy('id')->get();
        $ruangKelas = RuangKelas::where('is_active', true)->orderBy('urutan')->orderBy('id')->get();

        return view('Profil.fasilitas', compact('sarpras', 'ruangKelas'));
    }
}
