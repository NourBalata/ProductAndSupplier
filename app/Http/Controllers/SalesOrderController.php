<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleOrderRequest;
use App\Models\Product;
use App\Models\SaleOrder;
use App\Models\SalesOrderDetail;
use App\Models\Supplier;
use App\Traits\SupplierDataTrait;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF as PDF;
use Illuminate\Support\Facades\DB;

class SalesOrderController extends Controller
{
    use SupplierDataTrait;
    public function index()
    {
        $data = SaleOrder::get();
        $suppliers=Supplier::get();
        $products=Product::get();

  
        return  view('sales_order.index',compact('data','suppliers','products')) ;
    }

    public function getProductNames(Request $request)
    { 
        $product_id = $request->input('product_id');
    
        $data = Product::where('id',$product_id)
        ->get();
        //dd($data);
        return response()->json($data);
    }
    public function show($id)
    {

        
        try {

            $data = SaleOrder::find($id);
       
        
            $html=view('sales_order.show',compact('data'));
            PDF::SetTitle('Sales Order');
            PDF::AddPage();
            // PDF::loadHTML(view('sales_order.show'),compact('data'));
            PDF::writeHTML($html, true, false, true, false, '');
      
            PDF::Output('Sales Orders.pdf')
            ;
            
            return  view('sales_order.show',compact('data'));
          


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' =>'The Page Not Found']);

        }
    }

  

    public function store(SaleOrderRequest $request)
    {
 

        
            $data['place'] = $request->place;
            $data['supplier_id'] = $request->supplier_id;
    
            $data['final_total'] = $request->final_total;
        //  dd($data);

            $salesorders= SaleOrder::create($data);
            $total=$salesorders->final_total;
            $id=$salesorders->id;
            $this->get_supplier_data($id);

            for ($i = 0; $i < count($request->product); $i++) {

                $details[$i]['sales_order_id'] = $salesorders->id;
                $details[$i]['product_id']  = $request->product[$i];
        
        
                $details[$i]['quantity']  = $request->quantity[$i];
                $details[$i]['price']  = $request->price[$i];
                $details[$i]['amount']  = $request->amount[$i];
           
            

            }

            DB::table('sales_order_details')->insert($details);


            DB::commit();
            session()->flash('success','The data has been Created successfully');
            return redirect()->back();
    

            // session()->flash('success','The data has been Created successfully');
            // return response()->json($data);

    }

    public function update(SaleOrderRequest $request, $id)
    {
        $sales_order = SaleOrder::find($request->sale_order_id);
    

        $data['place'] = $request->place;
        $data['supplier_id'] = $request->supplier_id;
        $data['product_id'] = $request->product_id;
        $data['final_total'] = $request->final_total;

     

        $sales_order->update($data);

        return response()->json($data);

        // session()->flash('success','The data has been Updated successfully');
        // return redirect()->back();


    }
    public function destroy(Request $request)
    {
        try {

            $sales_order = SaleOrder::find($request->sale_order_id);
         
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
