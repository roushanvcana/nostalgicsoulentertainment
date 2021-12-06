<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class artists extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'artist_pic',
                'artist_name',
                'music_categories_id',
                'description',
       
    ];

    public function albums()
    {
        return $this->belongsTo(albums::class);      
    }
}
