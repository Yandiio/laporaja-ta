<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{

    protected $table = 'pengaduanmasyarakat';

    protected $fillable = [
        'isi_laporan','tgl_pelaporan','foto','status','tanggapan'
    ];

    public function masyarakat() {
        return $this->belongsToMany('App\User');
    }
}
