<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the default ('products')
    protected $table = 'menu_items';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'id',
        'name',         // Name of the product
        'price',        // Price of the product
        // 'description',  // Optional: Description of the product
        // 'qty',        // Optional: Stock quantity
        // Add other relevant columns here based on your database schema
    ];
}
