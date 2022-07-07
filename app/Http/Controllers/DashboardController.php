<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;
use App\Models\Laporan;

class DashboardController extends Controller
{
    public function index(){
        $quests = Quest::inRandomOrder()->limit(3)->get();
        $laporans = Laporan::inRandomOrder()->limit(3)->get();

        return view('index', [
            'quests' => $quests,
            'laporans' => $laporans,
            'title' => 'Home'
        ]);
    }
}
