@extends('backend.mastaring.master')
@section('expense.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Expense</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
                <form action="{{ route('expense.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="{{ old('title') }}">
                            @error('title')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description" value="{{ old('description') }}">
                            @error('description')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter Amount" value="{{ old('amount') }}">
                            @error('amount')
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