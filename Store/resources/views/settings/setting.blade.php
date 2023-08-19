@extends('layouts.admin')
@section('contentheader')
إعدادات الموقع
@endsection
@section('contentheaderlink')
<a href="http://">لوحة التحكم</a>
@endsection
@section('contentheaderactive')
إعدادات التحكم
@endsection
@section('content')


<div class="page-body">

    {{-- <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>اعدادات الموقع</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i data-father="home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">لوحة التحكم</li>
                    <li class="breadcrumb-item active">إعدادات الموقع</li>
                </ol>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid">
        <div class="row product adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>الاعدادات</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <form action="{{ route('dashboard.settings.update' , $setting->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                @if ($errors->any())
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                                    
                                @endif
                                {{-- value="{{ $setting->logo }} --}}

                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">لوجو الموقع</label>
                                    <input type="file" name="logo" id="validationCustom05" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0" ><span>*</span>
                                    اسم الموقع
                                    </label>
                                    <input type="text" name="title" id="validationCustom05" class="form-control" value="{{ $setting->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">وصف الموقع</label>
                                    <textarea class="form-control" rows="5"  name="description" value="">{{ $setting->description }}</textarea>
                                    {{--cols="40" rows="5" <input type="text" size="maxlength" name="dddddd" id="validationCustom05" class="form-control"> --}}
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        <span>*</span>
                                        البريد الالكتروني
                                    </label>
                                    <input type="text" name="email" id="validationCustom05" class="form-control" value="{{ $setting->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        رقم الهاتف
                                    </label>
                                    <input type="text" name="phone" id="validationCustom05" class="form-control" value="{{ $setting->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                    العنوان  
                                    </label>
                                    <input type="text" name="address" id="validationCustom05" class="form-control" value="{{ $setting->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        رابط الفيس بوك
                                    </label>
                                    <input type="text" name="facebook" id="validationCustom05" class="form-control" value="{{ $setting->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        رابط تويتر
                                    </label>
                                    <input type="text" name="twitter" id="validationCustom05" class="form-control" value="{{ $setting->twitter }}">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        حساب الانستجرام
                                    </label>
                                    <input type="text" name="instagram" id="validationCustom05" class="form-control" value="{{ $setting->instagram }}">
                                </div>
                                {{-- <div class="form-group"> --}}
                                    {{-- <label for="validationCustom05" class="col-form-label pt-0">
                                        
                                    قناة اليوتيوب
                                    </label>
                                    <input type="text" name="dddd" id="validationCustom05" class="form-control">
                                </div> --}}
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0">
                                        لينكد إن 
                                    </label>
                                    <input type="text" name="linkedin" id="validationCustom05" class="form-control" value="{{ $setting->linkedin }}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="dddd" id="validationCustom05" class="form-control btn-danger w-25" value="حفظ">
                                </div>
                            </form>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>










@endsection