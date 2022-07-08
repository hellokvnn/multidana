<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xl extends Model
{
    protected $fillable = ['kode', 'operator', 'harga'];
}
