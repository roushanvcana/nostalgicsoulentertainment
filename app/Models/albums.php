<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class albums extends Model
{
    use HasFactory;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'album_pic','album_name',
        'artists_id',
        'music_categories_id',
        'description',

    ];

    public function artists()
    {
        return $this->hasMany(artists::class);
    }
}
