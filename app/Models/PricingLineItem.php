<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingLineItem extends Model
{
    use HasFactory;

    public function pricingQuote()
    {
        return $this->belongsTo(PricingQuote::class);
    }
}
