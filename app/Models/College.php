<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class College extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['nama_kampus', 'akreditasi', 'jenis_kampus', 'peringkat_asia', 'peringkat_lokal', 'lokasi'];
}
