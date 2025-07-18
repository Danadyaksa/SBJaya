<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportItem extends Model
{
    protected $fillable = ['report_id', 'product_id', 'quantity', 'price'];

public function product()
{
    return $this->belongsTo(Product::class);
}
}
