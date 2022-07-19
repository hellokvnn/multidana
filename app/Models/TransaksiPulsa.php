<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPulsa extends Model
{
    protected $fillable = ['format', 'contoh', 'desc'];
}
