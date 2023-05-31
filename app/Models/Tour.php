<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'direction',
        'image',
        'lang',
        'price',
    ];

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'destination_tours');
    }
}
