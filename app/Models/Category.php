<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
    public function AddCategory(array $addcategory)
    {
        try {
            return $this->create([
                'category_name'=> $addcategory['category_name'],

            ]);
        } catch (\Throwable $e) {
            Log::error('[Category][AddCategory] Error creating category detail: ' . $e->getMessage());
        }
    } 
}
