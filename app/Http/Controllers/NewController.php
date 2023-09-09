<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewRequest;
use App\Models\Category;
use App\Models\Language;
use App\Models\News;
use App\Models\Status;
use App\Models\Type;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{

    public function index(Request $request)
    {
     
        $data = News::paginate(2);
        if ($request->ajax()) {
            return view('News.index2', ['data' => $data])->render();  
        }
        // if ($request->ajax()) {
        //     return view('News.index', compact('data'));
        // }
        $languages = Language::get();
        $categories=Category::get();
        $writers=Writer::get();
        $types=Type::get();
        $statuses=Status::get();
        // $data=News::get();
 
        return  view('News.index',compact('languages','categories','writers','types','statuses','data')) ;
    }

    public function fetch_data(Request $request)
    {
       
  
        if ($request->ajax()) {
            $data = DB::table('news')->paginate(2);
            return view('pagination_data',compact('data'));
        }
    }

    public function store(NewRequest $request)
    {
       
        try {

            $data['title_new'] = $request->title_new;
            $data['address'] = $request->address;
            $data['slug'] = $request->slug;
            $data['details'] = $request->details;

            $data['summary'] = $request->summary;
            $data['status_id'] = $request->status_id;
            $data['category_id'] = $request->category_id;
            $data['writer_id'] = $request->writer_id;

            $data['title'] = $request->title;
            
            $data['language_id'] = $request->language_id;
            $data['type_id'] = $request->type_id;
            $data['date'] = $request->date;
            $data['datepublication'] = $request->datepublication;

            if ($request->has('image')) {
                $the_file_path = uploadFile('uploads',$request->image);
                $data['image'] = $the_file_path;
            }

            News::create($data);

            return response()->json($data);
            // session()->flash('success','The data has been Created successfully');
            // return redirect()->route('products.index');


        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => $ex->getmessage()]);

        }
    }


}
