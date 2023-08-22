<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables ;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Requests\Dashboard\Categories\CategoryDeleteRequest ;
use App\Services\CategoryServices;
use App\Http\Requests\Dashboard\Categories\CategoryStoreRequest ;



class CategoryController extends Controller
{

    private $categoryService ;
    public function __construct(CategoryServices $categoryService){
        $this->categoryService = $categoryService ;
    }

    public function index()
    {

        $main = $this->categoryService->getMainCategory() ;
        return view('dashboard.categories.index' , compact('main'));
    }

    public function getall(){

        return $this->categoryService->dataTable();
    }


    public function create()
    {
        //
    }


    public function store(CategoryStoreRequest $request)
    {
       $this->categoryService->store($request->validated());
       return redirect()->route('dashboard.category.index')->with('success' , 'تم الاضافة بنجاح');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $category = $this->categoryService->getById($id);
        $main = $this->categoryService->getMainCategory() ;
         return view('dashboard.categories.edit' , compact('category' , 'main'));
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
