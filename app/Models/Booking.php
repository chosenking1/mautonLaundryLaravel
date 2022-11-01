<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * @var array $fillable
     */
    protected $fillable = [
        'full_name',
        'email',
        'service_details',
        'total_price',
    ];
    use HasFactory;
}
