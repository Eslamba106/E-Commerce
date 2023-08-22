<?php


namespace App\Services ;
use DataTables ;
use App\Models\Category ;
use App\Utils\ImageUpload;

class CategoryServices 
{
    public function getMainCategory(){
        return Category::where('parent_id' , 0)->orwhere('parent_id' , null)->get();
    }
    public function dataTable(){
        $data = Category::select('*')->with('parent');
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
            return  $row->name ;
        })
        ->addColumn('image_path' , function($row){
            return '<img src="'.asset($row->image_path).'"width="100px" height="100px">' ;
        })
        ->addColumn('parent' , function($row){
            // dd($row->parent);
            if($row->parent){
                return $row->parent->name;
            }
            return 'قسم رئيسي';
        })
        ->rawColumns([ 'name'  ,'image_path' , 'parent', 'action' ])//'id',
        ->make(true);
    }



    public function store($varibles){

        if(isset($varibles['image_path'])){
            $varibles['image_path'] = ImageUpload::imageuploade($varibles['image_path']);
        }
        $varibles['parent_id'] = $varibles['parent_id'] ?? 0 ;

        return Category::create($varibles);
    }



    public function getById($id){
        return Category::where('id' , $id)->firstOrFail();
    }
}