<?php

namespace App\Services;

use App\Utils\ImageUpload;
use App\Repositorties\ProductRepository;

class ProductServices
{
    public $ProductRepository ;
    public function __construct(ProductRepository $repo){
        $this->ProductRepository = $repo ;
    }
    public function getMainProduct(){
        return $this->ProductRepository->getMainCategory();
    }


    public function dataTable(){

        $productdata = $this->ProductRepository->baseQuery(['category']);
        return DataTables::of($productdata)
        ->addIndexColumn()
        

        ->addColumn('action' , function($row){
           return $btn = '<a href=" '. Route("dashboard.products.edit" , $row->id) . '" class="edit btn btn-success mt-md-0 mt-2">
             <i class="fa fa-edit"></i>
             </a>
            
            <a href="" id="deleteBtn" data-id="' .$row->id . '" class="edit btn btn-danger mt-md-0 mt-2" data-toggle="modal" 
            data-target="#deletemodal" data-original-title="test"><i class="fa fa-trash"></i></a>
             ';
        })
        ->addColumn('name' , function($row){
            return  $row->name ;
        })
        ->addColumn('price' , function($row){
            return ($row->price) ;
        })
        ->addColumn('discount_price' , function($row){
            return ($row->discount_price) ;
        })
        ->addColumn('product_color_size' , function($row){
            return ($row->product_color_size) ;
        })
        ->addColumn('category' , function($row){
            if($row->category){
                return $row->category->name;
            }
            return 'قسم وحيد';
        })
        ->rawColumns([ 'name'  ,'category' , 'price', 'discount_price' ,'product_color_size' , 'action' ])//'id',
        ->make(true);
    }
    public function store($varibles){

        // $varibles['parent_id'] = $varibles['parent_id'] ?? 0 ;
        // if(isset($varibles['image_path'])){
        //     $varibles['image_path'] = ImageUpload::imageuploade($varibles['image_path']);
        // }

        // return $this->ProductRepository->store($varibles);
        // return Product::create($varibles);
    }
    public function getById($id , $childcount = false){
        // return $this->ProductRepository->getById($id ,$childcount );
    }
    public function update($id , $varibles){
        
        // $category = $this->getById($id);
        // $varibles['parent_id'] = $varibles['parent_id'] ?? 0 ;
        // if(isset($varibles['image_path'])){
        //     $varibles['image_path'] = ImageUpload::imageuploade($varibles['image_path'] , 'Product');
        // }
        // return $category->update($varibles);
        // return $this->ProductRepository->update($id ,$varibles);
    }
    public function delete($request){
        // Product::whereId($request->id)->delete();
        // $this->ProductRepository->delete($request);
    }
}
