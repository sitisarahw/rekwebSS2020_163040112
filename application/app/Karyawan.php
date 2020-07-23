<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $fillable = ['npp', 'nama', 'tgl_lahir', 'jenjang', 'jabatan', 'wilayah', 'singkatan', 'unit', 'unit_besaran', 'link_img'];
    protected $timestamp = false;
}
