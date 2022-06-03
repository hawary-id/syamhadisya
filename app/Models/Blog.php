<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','image','keyword','description','users_id','slug'
    ];

    protected $hidden = [
    ];

    public function user()
    {
        return $this->belongsTo(Category::class, 'users_id', 'id');
    }
}
