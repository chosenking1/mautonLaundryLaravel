<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * @var array $fillable
     */
    protected $fillable = [
        'service_type',
        'service_name',
        'service_image',
        'service_details',
        'service_price',
        'white_material_price',
    ];

    use HasFactory;
}
