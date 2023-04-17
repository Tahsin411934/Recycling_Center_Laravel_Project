<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecyrecyclingProduct extends Model
{
    use HasFactory;
    protected $table = 'recycling_product';
    protected $primaryKey = 'id';
    protected $fillable = ['product_name', 'product_quantity', 'estimated_price', 'photo'];
}
