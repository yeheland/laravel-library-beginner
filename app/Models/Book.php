<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'author', 'category'];

    public function getAuthor()
    {
        return $this->belongsTo(Author::class, 'author');
    }
    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
