<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelkomselPln extends Model
{
    protected $fillable = ['kode', 'operator', 'harga'];
}
