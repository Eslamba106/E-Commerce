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
                       <form action="" class="needs-validation">
                        <div class="form-group">
                            <label  class="col-form-label pt-0" for="validationCustom05">الاسم</label>
                            <input type="text" name="name" id="validationCustom05" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <select name="" id="validationCustom05" class="form-control">
                                <option value="القسم الرئيسي">القسم الرئيسي</option>
                                <option value="القسم الفرعي">القسم الفرعي</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">الصورة</label>
                            <input type="file" name="logo" id="validationCustom05" class="form-control dropify"  data-default-file=""  >

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