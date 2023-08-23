<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleOrder extends Model
{

   
    use HasFactory;

    
    protected $table ='salesorders';

    protected $guarded = [];
    
    public function Supplier(){

        return $this->belongsTo(Supplier::class,'supplier_id');
    }
    public function Product(){

        return $this->belongsTo(Product::class);
    }

}
