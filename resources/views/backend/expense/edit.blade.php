@extends('backend.mastaring.master')
@section('service','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Update Service</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
            @if($service)
                <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="heading">Heading*</label>
                            <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Heading" value="{{ old('heading',$service->heading) }}">
                            @error('heading')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            <textarea name="short_description" id="" cols="30" rows="3" class="form-control" >{{ old('short_description',$service->short_description) }}</textarea>
                            @error('short_description')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="button_text">Service Old Image*</label>
                            <div class="input-group">
                                <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}" style="max-width: 100px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Service New Image (<span class="text-danger">Image must be 516*625</span>)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                                </div>
                            </div>
                            @error('image')
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
            @endif
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