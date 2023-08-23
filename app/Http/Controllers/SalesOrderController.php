<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleOrderRequest;
use App\Models\Product;
use App\Models\SaleOrder;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function index()
    {
        $data = SaleOrder::get();
        $suppliers=Supplier::get();
        $products=Product::get();

        return  view('sales_order.index',compact('data','suppliers','products')) ;
    }
    public function store(SaleOrderRequest $request)
    {
 
    

            $data['place'] = $request->place;
            $data['supplier_id'] = $request->supplier_id;
            $data['product_id'] = $request->product_id;
        //    $data2= $request->product_id;
//    $price=$request->product_id->price;
//         dd($price);
            $data['final_total'] = $request->product_id;
         

            SaleOrder::create($data);


            session()->flash('success','The data has been Created successfully');
            return redirect()->back();


        

    }

    public function update(SaleOrderRequest $request, $id)
    {
        $sales_order = SaleOrder::find($request->sale_order_id);
    

        $data['place'] = $request->place;
        $data['supplier_id'] = $request->supplier_id;
        $data['product_id'] = $request->product_id;
        $data['final_total'] = $request->final_total;

     

        $sales_order->update($data);


        session()->flash('success','The data has been Updated successfully');
        return redirect()->back();


    }
    public function destroy(Request $request)
    {
        try {

            $sales_order = SaleOrder::find($request->sale_order_id);
            //check the not exits
            if (empty($sales_order)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

            
            $sales_order->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->back();
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } //
    
    }
    

}
