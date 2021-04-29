<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'encode',
        'jenis',
    ];

    public function passwords()
    {
        return $this->belongsToMany(Password::class);
    }
}
