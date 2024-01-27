<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'quantity',
        
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
    public function AddProduct(array $addproduct)
    {
        try {
            return $this->create([
                'product_name'=> $addproduct['product_name'],
                'quantity' => $addproduct['quantity'],
                

            ]);
        } catch (\Throwable $e) {
            Log::error('[Product][AddProduct] Error creating book detail: ' . $e->getMessage());
        }
    }
}
