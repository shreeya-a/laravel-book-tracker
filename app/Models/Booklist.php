<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booklist extends Model
{
    use HasFactory;
    protected $fillable= ['title','author','genre','status','start','finish','review','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
