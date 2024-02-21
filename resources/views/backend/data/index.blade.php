@extends('backend.mastaring.master')
@section('service.index','active')
@section('menu','menu-open')
@section('content')
<div class="card">
    <div class="container">
        @if (Auth::user()->role==1)
        <div class="row">
            <div class="col-md-12 mt-1">
                <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
            </div>
        </div>
        @endif
    </div>
    @include('backend.layouts.notification')
    <!-- /.card-header -->
    <div class="card-body">     
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                @if (Auth::user()->role==1)
                <th>Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
                @foreach ($categories as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->description }}</td>
                        <td>
                            @if (Auth::user()->role==1)
                         <div class="row">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-block btn-primary btn-sm"  data-toggle="modal" data-target="#service_modal-{{ $row->id }}">edit</button>
                            </div>
                            <div class="col-md-2">
                                <form action="{{ route('category.destroy',$row->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="" class="deleteBtn btn btn-block btn-danger btn-sm" data-id="{{ $row->id }}">Delete</a>
                            </form>
                            </div>
                         </div>
                         @endif
                        </td>
                    </tr>
                        <div class="modal fade" id="service_modal-{{ $row->id }}">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Edit Feature</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{ route('service.update',$row->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name" value="{{ $row->name }}">
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="price">Price<span class="text-danger">*</span></label>
                                                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $row->description }}</textarea>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>     
                @endforeach
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>
@endsection
@section('js')
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.deleteBtn').click(function(e){
            var form=$(this).closest('form');
            var dataId=$(this).data('id');
            e.preventDefault();

            //swal javascript
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                form.submit();
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
            });

        });
    </script>
      
@endsection