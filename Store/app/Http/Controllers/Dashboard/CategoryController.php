<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables ;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Requests\Dashboard\Categories\CategoryDeleteRequest ;
// use Yajra\DataTables\Facades\DataTables as DataTables;

class CategoryController extends Controller
{

    public function index()
    {
        $querys = Category::all();
        $main = Category::where('parent_id' , 0)->orwhere('parent_id' , null)->get();
        return view('dashboard.categories.index' , compact('main' , 'querys'));
    }

    public function getall(){

       $data = Category::select('*');
        return DataTables::of($data)
        ->addIndexColumn()//->make(true) ;
        

        ->addColumn('action' , function($row){
           return $btn = '<a href=" '. Route("dashboard.category.edit" , $row->id) . '" class="edit btn btn-success mt-md-0 mt-2">
             <i class="fa fa-edit"></i>
             </a>
            
            <a href="" id="deleteBtn" data-id="' .$row->id . '" class="edit btn btn-danger mt-md-0 mt-2" data-toggle="modal" 
            data-target="#deletemodal" data-original-title="test"><i class="fa fa-trash"></i></a>
             ';
        })
        ->addColumn('name' , function($row){
            return ($row->id == 1) ? "القسم الرئيسي" : $row->name ;
        })
        ->addColumn('image_path' , function($row){
            return '<img src="'.asset($row->image_path).'"width="100px" height="100px">' ;
        })
        ->rawColumns([ 'name'  ,'image_path' , 'action' ])//'id',
        ->make(true);

//  dd($userr);
// return

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('dashboard.categories.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
    public function delete(CategoryDeleteRequest $request)
    {
        Category::whereId($request->id)->delete();
        return redirect()->route('dashboard.category.index');
    }
}
