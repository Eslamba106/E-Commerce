<?php


namespace App\Services ;
use DataTables ;
use App\Models\Category ;
use App\Utils\ImageUpload;
use App\Repositorties\CategoryRepository;

class CategoryServices 
{

    public $CategoryRepository ;
    public function __construct(CategoryRepository $repo){
        $this->CategoryRepository = $repo ;
    }
    public function getMainCategory(){
        return $this->CategoryRepository->getMainCategory();
    }
    public function dataTable(){
        // $data = Category::select('*')->with('parent');

        $data = $this->CategoryRepository->baseQuery(['parent']);
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

        $varibles['parent_id'] = $varibles['parent_id'] ?? 0 ;
        if(isset($varibles['image_path'])){
            $varibles['image_path'] = ImageUpload::imageuploade($varibles['image_path']);
        }

        return $this->CategoryRepository->store($varibles);
        // return Category::create($varibles);
    }
    public function getById($id , $childcount = false){
        return $this->CategoryRepository->getById($id ,$childcount );
    }
    public function update($id , $varibles){
        
        // $category = $this->getById($id);
        // $varibles['parent_id'] = $varibles['parent_id'] ?? 0 ;
        // if(isset($varibles['image_path'])){
        //     $varibles['image_path'] = ImageUpload::imageuploade($varibles['image_path'] , 'Category');
        // }
        // return $category->update($varibles);
        return $this->CategoryRepository->update($id ,$varibles);
    }
    public function delete($request){
        // Category::whereId($request->id)->delete();
        $this->CategoryRepository->delete($request);
    }
    public function getall(){
        return $this->CategoryRepository->baseQuery(['child'])->get();
    }
}