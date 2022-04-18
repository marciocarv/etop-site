<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'promocional'
    ];

    public function modules(){
        return $this->belongsToMany(Module::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
