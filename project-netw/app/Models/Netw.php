<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Netw extends Model
{
    use HasFactory;
    
    protected $table ='users';
    protected $guarded = ['id'];

    // kode kolom mana yang bisa diisi
    protected $fillable = [
        'name', 'email', 'password'
    ];
}
