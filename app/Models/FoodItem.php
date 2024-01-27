<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class FoodItem extends Model
{
    protected $fillable = [
        'category_id','food_name','price','image',
    ];
    
    public $table = 'food_items';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString(); 
        });
    }

}
