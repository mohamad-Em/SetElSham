<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Varietie;
class Corner extends Model
{
    use HasFactory;
    protected $table = 'corners';
    protected $fillable = [
        'name'
    ];
    public function varieties()
    {
        return $this->hasMany(Varietie::class,'corner_id','id');
    }
}
