<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    public static function getRank($qmr){
        $currentRankID = 0;
        foreach(Rank::all() as $rank){
            if($qmr > $rank->min_qmr){
                $currentRankID = $rank->id;
            } else {
                break;
            }
        }

        return $currentRankID;
    }
}
