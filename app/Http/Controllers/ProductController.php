<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
     
        $data = Product::get();
        $data = Product::get();
        //dd($data);

        $data2 = Product::select('products.*')
      ->get();
 
        // return response()->json($data);
        return  view('products.index',compact('data')) ;
    }

    public function prduct(Request $request)
    { 
        $product = $request->input('product_id');




    }

    public function store(ProductRequest $request)
    {
       
        try {

            $data['title'] = $request->title;
            $data['price'] = $request->price;
            $data['note'] = $request->note;
            $data['status'] = $request->status;


            if ($request->has('image')) {
                $the_file_path = uploadFile('uploads',$request->image);
                $data['image'] = $the_file_path;
            }

            Product::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('products.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }
    public function update(ProductRequest $request, $id)
    {
      
        $product = Product::find($request->product_id);
    
   
       
            $data['title'] = $request->title;
            $data['price'] = $request->price;
            $data['note'] = $request->note;
            $data['status'] = $request->status;

            if ($request->has('image')) {
                $the_old_path = $product->getRawOriginal('image');
                if (file_exists('uploads/'.$the_old_path) and !empty($the_old_path)) {
                    unlink('uploads/'.$the_old_path);
                }
                $the_file_path = uploadFile('uploads',$request->image);
                $data['image'] = $the_file_path;
            }

            $product->update($data);


            session()->flash('success','The data has been Updated successfully');
            return redirect()->route('products.index');


   
    }

 
    public function destroy(Request $request)
    {
       
        try {

            $product = Product::find($request->product_id);
            //check the not exits
            if (empty($product)) {
                return redirect()->back()->with(['error' => 'Sorry, the data cannot be accessed']);

            }

            if (file_exists('uploads/'.$product->getRawOriginal('image')) and !empty($product->getRawOriginal('image'))) {
                unlink('uploads/'.$product->getRawOriginal('image'));
            }
            $product->delete();
            session()->flash('success','The data has been Deleted successfully');
            return redirect()->route('products.index');
        }catch
        (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        } 
    }
}
