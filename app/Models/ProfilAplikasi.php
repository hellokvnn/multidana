<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilAplikasi extends Model
{
    protected $fillable = ['text', 'link', 'foto'];
}
