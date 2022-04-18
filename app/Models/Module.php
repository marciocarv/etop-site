<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'content'
    ];

    public function packs(){
        return $this->belongsToMany(Module::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function modulesByCategory($id){
        return Module::where('cagetory_id', $id);
    }
}
