<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
     
      
        $data = Status::get();
        
 
        return  view('statuses.index',compact('data')) ;
    }

  

    public function store(StatusRequest $request)
    {
       
        try {

            $data['name'] = $request->name;
  
         


         

            Status::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('products.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }
    public function update(StatusRequest $request, $id)
    {
      
        $status = Status::find($request->status_id);
    
   
       
            $data['name'] = $request->name;
       


          
            $status->update($data);


            session()->flash('success','The data has been Updated successfully');
            return redirect()->back();


   
    }

 
    public function destroy(Request $request)
    {
       
        try {

            $status = Status::find($request->status_id);
            //check the not exits
            if (empty($status)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

            $status->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->back();
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } 
    }
}
