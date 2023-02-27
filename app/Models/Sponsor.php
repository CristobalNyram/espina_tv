<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;



    public function getAllSponsorsActiveAndInActive(){

        return $this->all()->where('status','>=','-1');
    }
}
