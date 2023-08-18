<?php

namespace App\Models\Obox\RF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referensi extends Model
{
    use HasFactory;

    public function sandi()
    {
        return $this->hasMany(\App\Models\Obox\RF\Sandi::class);
    }
}
