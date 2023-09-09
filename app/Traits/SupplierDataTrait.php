<?php

namespace App\Traits;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Service;
use App\Models\Supplier;
use App\Models\User;

trait SupplierDataTrait
{



    function get_supplier_data($id){

        $data = Supplier::find($id);
    //    dd($data);
        return response()->json([$data]);

    }


    
    
    function get_product_data($id){

        $data =  Product::find($id);
     
        return response()->json([$data]);

    }

   
}