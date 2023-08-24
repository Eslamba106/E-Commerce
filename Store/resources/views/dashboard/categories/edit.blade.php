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



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                {{-- <div class="card-header">
                    <form action="" class="form-inline search-form search-box">

                    </form>
                    <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggel="model" data-original-title="test" data-bs-target="#exampleModel" >إضافة منتج جديد</button>
                </div> --}}
                <div class="card-body">
                    <div class="tabel-responsive table-desi">
                       <form action="{{ route('dashboard.category.update' , $category->id) }}" class="needs-validation" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label  class="col-form-label pt-0" for="validationCustom05">الاسم</label>
                            <input type="text" name="name" id="validationCustom05" class="form-control" value="{{ $category->name }}">
                        </div>
                        @if ($category->child_count < 1)
                                    
                        

                        <div class="form-group">
                            <label for="validationCustom05">القسم الرئيسي</label>
                            <select name=">parent_id" id="validationCustom05" class="form-control">
                                <option value="" @if ($category->parent_id == null) selected  @endif>قسم رئيسي</option>
                                @foreach ($main as $item)
                                @if ($item->id != $category->id)
                                    <option value="{{ $category->id }}" @if ($item->id == $category->parent_id) selected  @endif>{{ $item->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">الصورة</label>
                            <input type="file" name="image_path" id="validationCustom05" class="form-control dropify"  data-default-file=""  >

                        </div>
                        {{-- <div class="form-group">
                            <input type="submit" name="dddd" id="validationCustom05" class="form-control btn-danger w-25" value="حفظ">
                            <button class="form-control btn-danger w-25"type="submit">حفظ</button>
                        </div> --}}
                        <div class="modal-footer">
                            <button class="btn btn-primary"  type="submit">حفظ</button>
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