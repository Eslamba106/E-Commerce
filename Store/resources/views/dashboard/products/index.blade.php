@extends('layouts.admin')

@section('title')
    test view
@endsection

@section('contentheader')
    المنتجات
@endsection

@section('contentheaderlink')
    <a href="#">link</a>
@endsection

@section('contentheaderactive')
 this is test   
@endsection


@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form action="" class="form-inline search-form search-box"> 
                        </form>
                        <a href="{{ route('dashboard.products.create') }}">
                            <button type="button" 
                            class="btn btn-primary mt-md-0 mt-2" 
                            data-toggle="modal" data-original-title="test" 
                            data-target="#exampleModal" >إضافة منتج جديد</button></a>

                    </div>
                    <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="tabel-responsive table-desi">
                            <table style="text-align: center" class="table table-striped" id="TableProduct" dir="auto">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">الاسم</th>
                                            <th style="text-align: center">القسم</th>
                                            <th style="text-align: center" >السعر الاساسي</th>
                                            <th style="text-align: center" >التخفيض الاساسي</th>
                                            <th style="text-align: center" > عدد الالوان المتوفرة</th>
                                            <th style="text-align: center" >action</th>

                                        </tr>

                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection


















@push('script')
<script type="text/javascript">
    new DataTable('#TableProduct' , {
        ajax: "dashboard/products/getall",
        serverSide: true,
        processing: true ,
        columns: [
        { data: 'name' },
        { data: 'category' },
        { data: 'price' },
        { data: 'discount_price' },
        { data: 'product_color_size' },
        { data: 'action' },
    ]
    });
    $('#TableProduct tbody').on('click' , '#deleteBtn' , function(argument){
        var id = $(this).attr('data-id');

        $('#deletemodal #id').val(id);
    })
</script> 
@endpush