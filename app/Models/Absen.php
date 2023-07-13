<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table ='absen';
    protected $primaryKey ='id';
    protected $fillable = ['nama','kelas','tanggal','masuk','keluar'];

    public function tanGGal()
    {
        return $this->belongsTo(Tanggal::class, 'tanggal', 'id');
    }
    
}
