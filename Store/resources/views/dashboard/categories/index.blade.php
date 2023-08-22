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
                            <table style="text-align: center" class="table table-striped" id="Table" dir="auto">
                                {{-- table all-package table-category --}}
                                    <thead>
                                        <tr>
                                            {{-- <th>id</th> --}}
                                            <th style="text-align: center">name</th>
                                            <th style="text-align: center">image</th>
                                            <th style="text-align: center" >القسم</th>
                                            <th style="text-align: center" >action</th>
                                            {{-- <th> الاسم الحركي</th> --}}
                                            {{-- <th>Price</th> --}}
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
        {{-- modal  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('dashboard.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title f-w-600" id="exampleModalLabel">إضافة قسم جديد</h5>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        {{-- <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button> --}}
                    </div>
                    <div class="modal-body">
                        {{-- <form action="" class="needs-validation"> --}}
                            <div class="form">
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">الاسم</label>
                                    <input class="form-controller" id="validationCustom01" type="text" name="name" value="">
                                </div>
        
        
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">القسم الرئيسي</label>
                                    <select name="parent_id" id="validationCustom01" class="form-controller" >
                                        <option value=""> </option>
                                        @foreach ($main as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                  
                                <div class="form-group mb-0">
                                    <label for="validationCustom01" class="mb-1">الصورة</label>
                                    <input class="form-controller dropify" data-default-file="{{ asset('appfavicon/64e0a5a0576e919-08-2023.png') }}" id="validationCustom01" type="file" name="image_path">
                                </div>
        
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary"  type="submit">حفظ</button>
                        <button class="btn btn-secondary"  type="button" data-dismiss="modal">إغلاق</button>
                    </div>
                
            </form>
                </div>
            </div>
        </div>

</div>







<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ Route('dashboard.category.delete') }}" method="post">
        
            <div class="modal-content">
                <div class="modal-body">
                    @csrf
                    @method('delete')
                    <div class="form-group">
                        <p>{{ __('هل تريد الحذف ....؟') }}</p>
                        @csrf
                        <hr>
                        <input type="hidden" name="id" id="id">
                    </div>
                </div>
                <div class="model-footer" style="display:flex ; flex-direction:row-reverse">
                    <button class="btn btn-danger" style="display:inline-block ; margin-left:15px " type="submit" >{{ __('حذف') }}</button>
                    <button class="btn btn-info" style="display:inline-block ; margin-left:5px " type="button" data-dismiss="modal">{{ __('إغلاق') }}</button>
                </div>
                <br>
            </div>
        
        </form>
    </div>
</div>



@endsection

@push('script')
<script type="text/javascript">
    new DataTable('#Table' , {
        ajax: "dashboard/category/ajax",
        serverSide: true,
        processing: true ,
        columns: [
        { data: 'name' },
        { data: 'image_path' },
        { data: 'parent' },
        { data: 'action' },
    ]
    });
    // $(function(){
    //     var table = $('#Table').DataTable({
    //         processing: true ,
    //         serverSide: true,
    //         // order: [[1,"desc"]],
    //         ajax: "{{ Route('dashboard.category.getall') }}",
    //         columans: [
    //             {
    //                 data: 'id',
    //                 name: 'id',
    //             },
    //             {
    //                 data: 'name',
    //                 name: 'name',
    //             },
    //             {
    //                 data: 'parent_id',
    //                 name: 'parent_id',
    //             },
    //             {
    //                 data: 'image_path',
    //                 name: 'image_path',
    //             },
    //             // {
    //             //     data: 'action',
    //             //     name: 'action',
    //             //     orderable: false,
    //             //     searchable: false
    //             // },

    //         ],
    //     });
    // });
    $('#Table tbody').on('click' , '#deleteBtn' , function(argument){
        var id = $(this).attr('data-id');
        // console.log(id);
        $('#deletemodal #id').val(id);
    })
</script> 
{{-- <script>

    new DataTable('#Table');
</script> --}}


@endpush

{{--                                     </td>
    <img src="" data-field="image" alt="">
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
                                       <td>
--}}

