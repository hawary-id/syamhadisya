<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','tools','description','photo','url','categories_id','slug','page'
    ];

    protected $hidden = [
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
