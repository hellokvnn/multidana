<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PulsaH2H extends Model
{
    use HasFactory;

    protected $table = 'pulsa_h2h';

    protected $fillable = ['title', 'image', 'desc'];
}
