<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id_liked',
        'pet_id_liked_by',
    ];

    public function petLiked()
    {
        return $this->belongsTo(Perfilpet::class, 'pet_id_liked');
    }

    public function petLikedBy()
    {
        return $this->belongsTo(Perfilpet::class, 'pet_id_liked_by');
    }
}
