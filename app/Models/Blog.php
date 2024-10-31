<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'content',
        'date',
        'type',
        'tags'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments():HasMany
    {
        return $this->hasMany(Blogcomment::class);
    }
}
