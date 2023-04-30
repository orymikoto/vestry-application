<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikUsaha extends Model
{
  use HasFactory;

  protected $table = 'pemilik_usaha';
  protected $primaryKey = 'id_pemilik_usaha';
  protected $fillable = [
    'username',
    'email',
    'password',
    'no_rekening',
    'id_bank',
    'nama',
    'no_hp',
    'no_ktp',
    'pekerjaan_sampingan',
    'alamat_rumah',
    'kecamatan',
    'kota',
    'provinsi',
  ];

  protected $hidden = [
    'password'
  ];

  public function bank()
  {
    return $this->belongsTo(Bank::class);
  }
}
