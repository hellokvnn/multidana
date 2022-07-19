<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceMultibiller extends Model
{
    protected $fillable = ['kode', 'operator', 'harga'];
}
