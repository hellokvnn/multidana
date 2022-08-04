<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositViaTiket extends Model
{
    protected $fillable = ['format', 'contoh', 'title', 'desc'];
}
