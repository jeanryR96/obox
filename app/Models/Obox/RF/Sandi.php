<?php

namespace App\Models\Obox\RF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sandi extends Model
{
    use HasFactory;


    protected $public = ['timestamp'];
    protected $fillable=['snddesc'];
    
    public function referensi()
    {
        return $this->belongsTo(\App\Models\Obox\RF\Referensi::class);
    }
}
