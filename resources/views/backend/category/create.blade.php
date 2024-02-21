@extends('backend.mastaring.master')
@section('service.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Category</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Category Name*</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Service Name" value="{{ old('name') }}">
                            @error('name')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Category Description*</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                           
                            @error('description')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        </div>
        <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection