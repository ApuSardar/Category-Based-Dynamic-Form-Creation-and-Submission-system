@extends('backend.mastaring.master')
@section('sellservice.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Sell Service</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
                <form action="{{ route('sellservice.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Customer Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Customer Name" value="{{ old('name') }}">
                            @error('name')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label for="mobile">Phone<span class="text-danger">*</span></label>
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Customer Phone" value="{{ old('mobile') }}">
                            @error('mobile')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Customer Email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address<span class="text-danger">*</span></label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Enter Customer Address" value="{{ old('address') }}">
                            @error('address')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                  
                        <div class="form-group">
                            <label for="price">Service Name <span class="text-danger">*</span></label>
                            <select name="service_name[]" id="" class="form-control" multiple>
                                <option value="" disabled>Service Name</option>
                                @foreach ($services as $key=>$item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            @error('service_name')
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