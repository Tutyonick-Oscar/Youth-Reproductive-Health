<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BumpCore\EditorPhp\Casts\EditorPhpCast;


class Vision extends Model
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
