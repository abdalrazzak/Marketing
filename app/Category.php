<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description','parent_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_products');
    }

    public function subCategories(){
        return $this->hasMany(Category::class,'parent_id','id');
    }
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id','id');
    }
}
