<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    
    public function index()
    {
     
        $data = Supplier::get();

        return  view('suppliers.index',compact('data')) ;
    }



    public function store(SupplierRequest $request)
    {
       
        try {

            $data['name'] = $request->name;
           
            $data['status'] = $request->status;
            Supplier::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('suppliers.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }
    public function update(SupplierRequest $request, $id)
    {
      
        $supplier = Supplier::find($request->supplier_id);
    

        $data['name'] = $request->name;
           
        $data['status'] = $request->status;

       

            $supplier->update($data);


            session()->flash('success','The data has been Updated successfully');
            return redirect()->route('suppliers.index');


   
    }

 
    public function destroy(Request $request)
    {
       
        try {

            $supplier = Supplier::find($request->supplier_id);
            //check the not exits
            if (empty($supplier)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

          
            $supplier->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->route('suppliers.index');
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } //
    }
}
