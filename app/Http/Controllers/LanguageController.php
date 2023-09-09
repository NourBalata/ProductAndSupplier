<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
     
      
        $data = Language::get();
        
 
        return  view('languages.index',compact('data')) ;
    }

  

    public function store(LanguageRequest $request)
    {
       
        try {

            $data['name'] = $request->name;
            $data['slug'] = $request->slug;
         


         

            Language::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('products.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }
    public function update(LanguageRequest $request, $id)
    {
      
        $language = Language::find($request->language_id);
    
   
       
            $data['name'] = $request->name;
            $data['slug'] = $request->slug;


          
            $language->update($data);


            session()->flash('success','The data has been Updated successfully');
            return redirect()->back();


   
    }

 
    public function destroy(Request $request)
    {
       
        try {

            $language = Language::find($request->language_id);
            //check the not exits
            if (empty($language)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

            $language->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->back();
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } 
    }
}
