<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Corner;
class Varietie extends Model
{
    use HasFactory;
    protected $table = 'varieties';
    protected $fillable = [
        'name' , 'image' ,'type' , 'price' , 'size' , 'extras' , 'corner_id'
    ];
    public function corner()
    {
        return $this->belongsTo(Corner::class,'corner_id');
    }
}
