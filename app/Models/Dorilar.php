<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dorilar extends Model
{
    use HasFactory;

    public function tashxislar() {
        return $this->belongsToMany(Articles::class, 'bemor_dori', 'dori_id', 'tashxis_id')->withTimestamps();
    }
}
