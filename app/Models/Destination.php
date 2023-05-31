<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'lang',
    ];

    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'destination_tours');
    }
}
