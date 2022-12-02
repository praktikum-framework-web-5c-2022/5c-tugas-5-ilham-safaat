<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;

class Kontak extends Model
{
    protected $guarded = [];
    public function guru(){
        return $this->hasOne(Guru::class, 'kontak_id');
    }
    use HasFactory;
}
