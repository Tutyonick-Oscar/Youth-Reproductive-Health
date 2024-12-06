<?php

namespace App\Models;
use BumpCore\EditorPhp\Casts\EditorPhpCast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cause extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'content'
    ];
    protected $casts = [
        'content' => EditorPhpCast::class,
    ];
}
