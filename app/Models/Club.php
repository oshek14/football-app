<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'logo', 'description', 'manager', 'coach', 'location'];

    public function layers()
    {
        return $this->hasMany(Player::class);
    }
}
