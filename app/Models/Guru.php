<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Kontak;
class Guru extends Model
{

    protected $guarded = ['id'];
    public function kontak(){
        return $this->belongsTo(Kontak::class);
    }
    use HasFactory;
}
