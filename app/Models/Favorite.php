<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title',
        'Year',
        'imdbID',
        'Type',
        'Poster', 
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
