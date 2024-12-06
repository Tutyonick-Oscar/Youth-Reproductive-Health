<?php

namespace App\Models;
use BumpCore\EditorPhp\Casts\EditorPhpCast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Mission extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image1',
        'image2',
        'content'
    ];
    protected $casts = [
        'content' => EditorPhpCast::class,
    ];
}
