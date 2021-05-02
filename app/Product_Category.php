<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Product_Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product_category';
    protected $fillable = [
        'name', 'created_at'
    ];
    public $timestamps = false;

}