@extends('layouts.admin')
@section('contentheader')
المنتجات
@endsection
@section('contentheaderlink')
<a href="http://">لوحة التحكم</a>
@endsection
@section('contentheaderactive')
اضافة منتج

@endsection
@section('content')










<div class="page-body">



    <div class="container-fluid">
        <div class="row product adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>إضافة منتج</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('PUT') --}}
                                @if ($errors->any())
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                                    
                                @endif


                                <div class="form-group">
                                    <label for="validationCustom05">القسم </label>
                                    <select name="category_id" id="validationCustom05" class="form-control" required>
                                        <option value="" > اختر القسم</option>   
                                        @foreach ($categories as $category)
                                        @if ($category->parent_id == 0)
                                            
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                            @foreach ($category->child as $child)
                                                <option value="{{ $child->id }}">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;{{ $child->name }}
                                                </option>
                                            @endforeach
                                        @endforeach                                 
                                    </select>
                                </div>
                                

                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">الصورة الرئيسية للمنتج</label>
                                    <input type="file" name="image_path" id="validationCustom05" class="form-control dropify" data-default-file="" >

                                </div>

                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        اسم المنتج
                                         
                                    </label>
                                    <input type="text" name="name" id="validationCustom05" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">وصف المنتج</label>
                                    <textarea class="form-control" rows="5"  name="description" value=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        السعر الاساسي للمنتج
                                    </label>
                                    <input type="text" name="price" id="validationCustom05" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                         التخفيض الاساسي للمنتج
                                    </label>
                                    <input type="text" name="discount_price" id="validationCustom05" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="dddd" id="validationCustom05" class="form-control btn-danger w-25" value="حفظ">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection