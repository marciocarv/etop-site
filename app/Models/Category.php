<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'image'
    ];

    public function packs(){
        return $this->hasMany(Pack::class);
    }

    public function modules(){
        return $this->hasMany(Module::class);
    }
}
