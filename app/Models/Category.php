<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;


    protected $fillable = [
        'category_name',
        'user_email',
        // Add any other fields that can be mass assigned here
    ];
public function categoryData()
{
    return $this->hasMany(CategoryData::class, 'category_id');
}

}