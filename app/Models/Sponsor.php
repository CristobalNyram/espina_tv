<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Sponsor extends Model
{
    use HasFactory;
    use Sluggable;


    protected $fillable = [
        'name',
        'slug',
        'description',
        'time_support',
        'logo_img',
        'phone_number',
        'address',
        'email',


    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }



    public function getAllSponsorsActiveAndInActive(){

        return $this->all()->where('status','>=','-1');
    }
}
