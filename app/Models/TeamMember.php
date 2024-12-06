<?php

namespace App\Models;
use BumpCore\EditorPhp\Casts\EditorPhpCast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'content',
        'function'
    ];
    protected $casts = [
        'content' => EditorPhpCast::class,
    ];
}
