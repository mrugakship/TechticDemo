<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product';
    protected $fillable = [
        'name', 'description', 'unique_code', 'category_id','created_at', 'update_at'
    ];
    public $timestamps = false;

}