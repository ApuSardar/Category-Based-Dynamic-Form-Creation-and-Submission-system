@extends('backend.mastaring.master')

{{-- Title --}}
{{-- @section('title')
    {{ config('app.name') }} | My Profile
@endsection --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                My Profile
            </li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row">
    <div class="col-12">
        <ul class="nav nav-pills mb-2" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-toggle="pill" href="#pills-account" role="tab" aria-selected="true">
                    <i data-feather='user' class="mr-50"></i>
                    Account
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="pill" href="#pills-security" role="tab" aria-selected="false">
                    <i data-feather='lock' class="mr-50"></i>
                    Security
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Profile Details</h4>
                    </div>
                    @include('backend.layouts.notification')
                    <div class="card-body py-2">
                            <div class="d-flex flex-wrap align-items-end">
                                <form action="{{ route('admin.profile.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex flex-wrap align-items-end">
                                        <div class="mr-1 mb-1">
                                          <img src="{{asset('storage/'.Auth::user()->image)  }}" class="uploadedAvatar rounded object-fit--cover" alt="profile image" width="100" height="100">
                                        </div>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mb-1">
                                            <div>
                                                <input class="form-control" type="file" name="image">
                                                <button type="submit" class="btn btn-sm btn-success mb-75 mr-75 waves-effect waves-float waves-light mt-1">Upload</button>
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>                    
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </form>
                            </div>
                        <form action="{{ route('admin.update',Auth::user()->id) }}" method="POST"> 
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="first_name" class="form-control" name="name" placeholder="Your Name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="demo@demo.com" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>                 
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success waves-effect waves-float waves-light w-100 w-sm-auto">Submit</button>
                                </div>                          
                            </div>
                        </form>
                    </div>            
                </div>
            </div>
            <div class="tab-pane fade" id="pills-security" role="tabpanel">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Change Password</h4>
                    </div>
                    <div class="card-body py-2">
                        <form action="{{ route('reset-password') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="account-old-password">Current password</label>
                                        <div class="input-group form-password-toggle">
                                            <input type="password" class="form-control" id="account-old-password" name="old_password" placeholder="Enter current password">
                                            <div class="input-group-append cursor-pointer">
                                                <span role="button" class="input-group-text">
                                                    <i data-feather='eye'></i>
                                                </span>
                                            </div>
                                        </div>
                                        @error('old_password')
                                            <span class="text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-new-password">New Password</label>
                                        <div class="input-group form-password-toggle">
                                            <input type="password" class="form-control" id="account-new-password" name="new_password" placeholder="Enter current password">
                                            <div class="input-group-append cursor-pointer">
                                                <span role="button" class="input-group-text">
                                                    <i data-feather='eye'></i>
                                                </span>
                                            </div>
                                        </div>
                                        @error('new_password')
                                            <span class="text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-retype-new-password">Retype New Password</label>
                                        <div class="input-group form-password-toggle">
                                            <input type="password" class="form-control" id="account-retype-new-password" name="new_password_confirmation" placeholder="Enter current password">
                                            <div class="input-group-append cursor-pointer">
                                                <span role="button" class="input-group-text">
                                                    <i data-feather='eye'></i>
                                                </span>
                                            </div>
                                        </div>
                                        @error('new_password_confirmation')
                                            <span class="text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success waves-effect waves-float waves-light w-100 w-sm-auto">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        // Update & Reset Profile photo on click of button
        $(document).ready(function(){
            let accountUploadImg = $('#account-upload-img');
            let accountUploadInput = $('#account-upload');
            let accountResetBtn = $('#account-reset');
            if (accountUploadInput) {
                accountUploadInput.on('change', function (e) {
                    var reader = new FileReader(),
                        files = e.target.files;
                    reader.onload = function () {
                        if (accountUploadImg) {
                            accountUploadImg.attr('src', reader.result);
                        }
                    };
                    reader.readAsDataURL(files[0]);
                });
            }
            accountResetBtn.on('click', function(e){
                if (accountUploadImg) {
                    accountUploadImg.attr('src', accountUploadImg.attr('data-reset-src'));
                    // Reset accountUploadInput value
                    if (accountUploadInput.val() != '') {
                        accountUploadInput.val('');
                    }
                }
            });
        })
    </script>
@endpush