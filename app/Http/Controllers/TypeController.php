<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use App\Models\Writer;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
     
      
        $data = Type::get();
        
 
        return  view('kind_type.index',compact('data')) ;
    }

  

    public function store(TypeRequest $request)
    {
       
        try {

            $data['name'] = $request->name;
            $data['slug'] = $request->slug;
         


         

            Type::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('products.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }
    public function update(TypeRequest $request, $id)
    {
      
        $type = Type::find($request->type_id);
    
   
       
            $data['name'] = $request->name;
            $data['slug'] = $request->slug;


          
            $type->update($data);


            session()->flash('success','The data has been Updated successfully');
            return redirect()->back();


   
    }

 
    public function destroy(Request $request)
    {
       
        try {

            $type = Type::find($request->type_id);
            //check the not exits
            if (empty($type)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

            $type->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->back();
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } 
    }
}
