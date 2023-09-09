<?php

namespace App\Models;

use App\Models\Product;
use App\Models\SaleOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrderDetail extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function sales_order(){

        return $this->belongsTo(SaleOrder::class);
    }


    public function product(){

        return $this->belongsTo(Product::class,'products_id');
    }

}
