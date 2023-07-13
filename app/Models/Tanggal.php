<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggal extends Model
{
    use HasFactory;
    protected $table ='tanggal';
    protected $primaryKey ='id';
    protected $fillable = ['tanggal'];

    public function absen()
    {
        return $this->hasMany(Absen::class);
    }

}