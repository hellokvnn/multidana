<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = ['logo', 'kota', 'alamat', 'telp', 'fax', 'email', 'solution_centre', 'whatsapp', 'link_whatsapp', 'link_instagram', 'link_twitter'];
}
