<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_logo',
        'image_header',
        'judul',
        'diskripsi',
        'image_1',
        'name_1', 
        'jurusan_1',
        'anggota_1',
        'email_1',
        'No_hp_1',
        'tmpt_tgl_1',
        'umur_1',
        'bio_1',
        'image_2',
        'name_2',
        'jurusan_2',
        'anggota_2',
        'email_2',
        'No_hp_2',
        'tmpt_tgl_2',
        'umur_2',
        'bio_2',
        'image_3',
        'name_3',
        'jurusan_3',
        'anggota_3',
        'email_3',
        'No_hp_3',
        'tmpt_tgl_3',
        'umur_3',
        'bio_3',
    ];
}

