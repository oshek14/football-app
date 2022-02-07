<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'designation'];

    public function club()
    {
        return $this->hasOne(Club::class);
    }
}
