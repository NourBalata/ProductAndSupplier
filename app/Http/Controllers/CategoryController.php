<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
     
      
        $data = Category::get();
        
 
        return  view('categories.index',compact('data')) ;
    }

  

    public function store(CategoryRequest $request)
    {
       
        try {

          
       
            $data['name'] = $request->name;
            $data['slug'] = $request->slug;
         


         

            Category::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('products.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }
    public function update(CategoryRequest $request, $id)
    {
      
        $category = Category::find($request->category_id);
    
   
       
            $data['name'] = $request->name;
            $data['slug'] = $request->slug;


          
            $category->update($data);


            session()->flash('success','The data has been Updated successfully');
            return redirect()->back();


   
    }

 
    public function destroy(Request $request)
    {
       
        try {

            $category = Category::find($request->category_id);
            //check the not exits
            if (empty($category)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

            $category->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->back();
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } 
    }
}
