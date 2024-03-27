<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryData extends Model
{

    use HasFactory;
    
    protected $table = 'categories_data';
    protected $fillable = ['category_id', 'data']; // List of fillable attributes

    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }
}
