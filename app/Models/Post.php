<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
        'content',
        'id_category',
        'active',
        'thumb',
    ];
    // protected $table = 'posts';
    // protected $primaryKey = 'id';
    // protected $guarded = [];

    public function postCategory()
    {
        return $this->hasOne(PostCategory::class, 'id', 'id_category')
        ->withDefault(['title' => '']);
    }
}
