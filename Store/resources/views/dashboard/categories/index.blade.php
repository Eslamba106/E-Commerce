@extends('layouts.admin')
@section('contentheader')
اقسام المنتجات  
@endsection
@section('contentheaderlink')
<a href="http://">لوحة التحكم</a>
@endsection
@section('contentheaderactive')
الاقسام الفرعية
@endsection
@section('content')


{{-- <div class="container-fluid">
    <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form action="" class="form-inline search-form search-box">

                        </form>
                        <button type="button" class="btn btn-primary mt-md-0 mt-2"
                            data-bs-toggle="modal" data-original-title="test"
                            data-bs-target="exampleModal" >إضافة قسم جديد
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="tabel-responsive table-desi">
                            <table class="table all-package table-category" id="edittable">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Sub Category</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <img src="" data-field="image" alt="">
                                    </td>
                                    <td data-field="name">Logo Deisgn</td>
                                    <td data-field="price">$55.00</td>
                                    <td data-field="status" class="order-success"><span>Success</span></td>
                                    <td data-field="name">Digital</td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-edit" title="Edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-trash" title="Delete"></i>
                                        </a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">إضافة منتج جديد</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation">
                        <div class="form">
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">الاسم</label>
                                <input class="form-controller" id="validationCustom01" type="text" name="name">
                            </div>


                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">القسم الرئيسي</label>
                                <select name="parent_id" id="validationCustom01" class="form-controller" >
                                    <option value="">القسم الرئيسي</option>
                                </select>
                            </div>

                            <div class="form-group mb-0">
                                <label for="validationCustom01" class="mb-1">الصورة</label>
                                <input class="form-controller dropify" id="validationCustom01" type="file" name="image_path">
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button">حفظ</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>


</div> --}}

<div class="page-body">
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <form action="" class="form-inline search-form search-box">
                            
                        </form>
                        <button type="button" class="btn btn-primary mt-md-0 mt-2" data-toggle="modal" data-original-title="test" data-target="#exampleModal" >إضافة قسم جديد</button>
                    </div>

                    <div class="card-body">
                        <div class="tabel-responsive table-desi">
                            <table class="table all-package table-category" id="editableTable">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Sub Category</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <img src="" data-field="image" alt="">
                                    </td>
                                    <td data-field="name">Logo Deisgn</td>
                                    <td data-field="price">$55.00</td>
                                    <td data-field="status" class="order-success"><span>Success</span></td>
                                    <td data-field="name">Digital</td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-edit" title="Edit"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-trash" title="Delete"></i>
                                        </a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
        {{-- modal  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title f-w-600" id="exampleModalLabel">إضافة منتج جديد</h5>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        {{-- <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button> --}}
                    </div>
                    <div class="modal-body">
                        <form action="" class="needs-validation">
                            <div class="form">
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">الاسم</label>
                                    <input class="form-controller" id="validationCustom01" type="text" name="name">
                                </div>
        
        
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">القسم الرئيسي</label>
                                    <select name="parent_id" id="validationCustom01" class="form-controller" >
                                        <option value="">القسم الرئيسي</option>
                                        @foreach ($main as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
        
                                <div class="form-group mb-0">
                                    <label for="validationCustom01" class="mb-1">الصورة</label>
                                    <input class="form-controller dropify" id="validationCustom01" type="file" name="image_path">
                                </div>
        
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button">حفظ</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>

</div>











@endsection