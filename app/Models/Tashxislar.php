<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tashxislar extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function dorilar() {
        return $this->belongsToMany(Dorilar::class, 'bemor_dori', 'tashxis_id', 'dori_id')->withTimestamps();
    }
}
