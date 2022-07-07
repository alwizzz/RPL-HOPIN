<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaruratController extends Controller
{
    public function index(){
        
        return view('darurat.index',[
            'title' => 'Darurat',
        ]);
    }
    
    public function polisi(){
        
        return view('darurat.polisi',[
            'title' => 'Polisi',
            'location' => 'Jl. Slamet Riyadi No.404, Purwosari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57142',
            'buka_jam' => 'Buka 24 Jam',
            'telepon' => '085101900900',
            'desc' => 'Berdasarkan alamat pengguna IGD  Rumah Sakit Kasih Ibu  merupakan rumah sakit  yang terdekat dengan anda',
        ]);
    }
    
    public function igd(){
        
        return view('darurat.igd',[
            'title' => 'IGD',
            'location' => 'Jl. Slamet Riyadi No.404, Purwosari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57142',
            'buka_jam' => 'Buka 24 Jam',
            'telepon' => '085101900900',
            'desc' => 'Berdasarkan alamat pengguna IGD  Rumah Sakit Kasih Ibu  merupakan rumah sakit  yang terdekat dengan anda',
        ]);
    }
    
    public function damkar(){
        
        return view('darurat.damkar',[
            'title' => 'Pemadam Kebakaran',
            'location' => 'Jl. Slamet Riyadi No.328, Purwosari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57142',
            'buka_jam' => 'Buka 24 Jam',
            'telepon' => '0271712332',
            'desc' => 'Berdasarkan alamat pengguna polresta solo merupakan kantor polisi yang terdekat dengan anda',
        ]);
    }
}
