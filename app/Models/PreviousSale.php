<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousSale extends Model
{
    use HasFactory;

    function product() {
        return $this->belongsTo(Product::class);
    }
}
