<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPulsaH2HItem extends Model
{
    use HasFactory;

    protected $table = 'detail_pulsa_h2h_item';

    protected $fillable = ['kode', 'operator', 'harga', 'pulsa_h2h_item_id'];
}
