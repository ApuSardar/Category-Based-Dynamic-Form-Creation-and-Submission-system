@extends('backend.mastaring.master')
@section('expense.index','active')
@section('menu','menu-open')
@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-1">
                <a href="{{ route('expense.create') }}" class="btn btn-primary">Create Expense</a>
            </div>
            <div class="col-md-4">
                <strong>Total Expense : {{ App\Models\Expense::sum('amount') }}৳</strong>
            </div>
        </div>
    </div>
    @include('backend.layouts.notification')
    <!-- /.card-header -->
    <div class="card-body">   
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Date & Time</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $row)
                    <tr>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->amount }}</td>
                        <td>{{ $row->created_at->format('d-m-Y - h:i:sa') }}</td>
                        <td>
                         <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-block btn-primary btn-sm"  data-toggle="modal" data-target="#service_modal-{{ $row->id }}">edit</button>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('expense.destroy',$row->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="" class="deleteBtn btn btn-block btn-danger btn-sm" data-id="{{ $row->id }}">Delete</a>
                            </form>
                            </div>
                         </div>
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
                                <form action="{{ route('expense.update',$row->id) }}" method="POST">
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
                                                    <input type="number" class="form-control" name="price" value="{{ $row->price }}">
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-12">
                                                     <label for="price">Status <span class="text-danger">*</span></label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="">Status</option>
                                                        <option value="active" >Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
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