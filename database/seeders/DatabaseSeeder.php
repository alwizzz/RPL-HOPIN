<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rank;
use App\Models\Quest;
use App\Models\Laporan;



use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    function generateRank(){
        Rank::create(['name' => 'Anak Baru', 'min_qmr' => 0]);
        Rank::create(['name' => 'Termotivasi', 'min_qmr' => 500]);
        Rank::create(['name' => 'Pekerja Keras', 'min_qmr' => 1500]);
        Rank::create(['name' => 'Dermawan', 'min_qmr' => 4000]);
        Rank::create(['name' => 'Malaikat', 'min_qmr' => 10000]);
    }

    function createUser($nama_lengkap, $username, $email, $total_exp, $total_qmr){
        User::create([
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'email' => $email,
            'password' => bcrypt("123456789"),
            'ttl' => "2000-10-10",
            'alamat' => 'Solo',
            'total_exp' => $total_exp,
            'total_qmr' => $total_qmr,
            'level' => $total_exp / 1000,
            'rank_id' => Rank::getRank($total_qmr)
        ]);
    }
    function generateUser(){
        $this->createUser("Joseph Felix Damarta", 'Extra20Percent', 'jojoseph@email.com', 75400, 12000);
        $this->createUser('Muhammad Alwiza Ansyar', 'WeDay', 'alwiza21@gmail.com', 32500 , 4200);
        $this->createUser('Kristian Budi Pradana Putra', 'matildaa', 'iankrstn.kbpp@gmail.com', 4200 , 300);
        $this->createUser('Mohammad Farrell Naufal Ramadhani', 'MelawaX', 'farnoov@gmail.com', 69400, 3400);
    }

    public function run()
    {
        $this->generateRank();

        $this->generateUser();

        Quest::factory(20)->create();

        Laporan::factory(10)->create();
    }
}
