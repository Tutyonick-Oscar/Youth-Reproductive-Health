<?php

namespace App\Models;
use BumpCore\EditorPhp\Casts\EditorPhpCast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'content',
        'date',
        'type',
        'tags',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'content' => EditorPhpCast::class,
    ];
}
