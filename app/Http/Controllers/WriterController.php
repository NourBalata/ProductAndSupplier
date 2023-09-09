<?php

namespace App\Http\Controllers;

use App\Http\Requests\WriterRequest;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
     
      
        $data = Writer::get();
        
 
        return  view('writers.index',compact('data')) ;
    }

  

    public function store(WriterRequest $request)
    {
       
        try {

            $data['name'] = $request->name;
            $data['slug'] = $request->slug;
         


         

            Writer::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('products.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }
    public function update(WriterRequest $request, $id)
    {
      
        $writer = Writer::find($request->writer_id);
    
   
       
            $data['name'] = $request->name;
            $data['slug'] = $request->slug;


          
            $writer->update($data);


            session()->flash('success','The data has been Updated successfully');
            return redirect()->back();


   
    }

 
    public function destroy(Request $request)
    {
       
        try {

            $writer = Writer::find($request->writer_id);
            //check the not exits
            if (empty($writer)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

            $writer->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->back();
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } 
    }
}
