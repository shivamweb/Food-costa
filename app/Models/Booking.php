<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;

class Booking extends Model
{
    protected $fillable = [
        'customer',
        'note',
    ];
    
    public $table = 'bookings';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString(); 
        });
    }
    public function addBooking(array $addbooking)
    {
        try {
            return $this->create([
                
                'customer'=> $addbooking['customer'],
                'note' => $addbooking['note'],
               
            ]);
        } catch (\Throwable $e) {
            Log::error('[Booking][addBooking] Error creating book detail: ' . $e->getMessage());
        }
    }

}
