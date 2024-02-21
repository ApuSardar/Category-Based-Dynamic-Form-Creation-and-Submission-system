@extends('backend.mastaring.master')
@section('generalsetting','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Update Generalsetting</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
            <form action="{{ route('generalsetting.update',$generalSettings->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="col-12">
                            <div class="form-group">
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('storage/') }}/{{ generalSettings()->logo }}" alt="avatar" style="max-width: 170px">
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <div class="custom-file">
                                <input type="file" name="logo" class="form-control" id="logo">
                            </div>
                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->favicon }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="favicon">Favicon</label>
                            <div class="custom-file">
                                <input type="file" name="favicon" class="form-control" id="favicon">
                            </div>
                            @error('favicon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->about_bg }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about_bg">About Page Background</label>
                            <div class="custom-file">
                                <input type="file" name="about_bg" class="form-control" id="about_bg">
                            </div>
                            @error('about_bg')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->service_bg }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="service_bg">Service Page Background</label>
                            <div class="custom-file">
                                <input type="file" name="service_bg" class="form-control" id="service_bg">
                            </div>
                            @error('service_bg')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>     
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->project_bg }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="project_bg">Project Page Background</label>
                            <div class="custom-file">
                                <input type="file" name="project_bg" class="form-control" id="project_bg">
                            </div>
                            @error('project_bg')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>      
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->contact_bg }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_bg">Contact Page Background</label>
                            <div class="custom-file">
                                <input type="file" name="contact_bg" class="form-control" id="contact_bg">
                            </div>
                            @error('contact_bg')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        {{-- <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{asset('storage/'.generalsettings()->location_image)}}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="location_image">Location Image</label>
                            <div class="custom-file">
                                <input type="file" name="location_image" class="form-control" id="location_image">
                            </div>
                            @error('location_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>  --}}
                        <div class="form-group">
                            <label for="location_image">Location Icon</label>
                            <div class="custom-file">
                                <input type="text" name="location_image" class="form-control" id="location_image" value="{{ generalsettings()->location_image }}">
                            </div>
                            @error('location_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                         {{--  <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->phone_image }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_image">Phone Image</label>
                            <div class="custom-file">
                                <input type="file" name="phone_image" class="form-control" id="phone_image">
                            </div>
                            @error('phone_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="phone_image">Phone Icon</label>
                            <div class="custom-file">
                                <input type="text" name="phone_image" class="form-control" id="phone_image" value="{{ generalsettings()->phone_image }}">
                            </div>
                            @error('phone_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div> 
                    <div class="col-12">
                        {{-- <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->email_image }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email_image">Email Image</label>
                            <div class="custom-file">
                                <input type="file" name="email_image" class="form-control" id="email_image">
                            </div>
                            @error('email_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="email_image">Email Icon</label>
                            <div class="custom-file">
                                <input type="text" name="email_image" class="form-control" id="email_image" value="{{ generalsettings()->email_image }}">
                            </div>
                            @error('email_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>   
                    <div class="col-12">
                        {{-- <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->watch_image }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="watch_image">Watch Image</label>
                            <div class="custom-file">
                                <input type="file" name="watch_image" class="form-control" id="watch_image">
                            </div>
                            @error('watch_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="watch_image">Watch Icon</label>
                            <div class="custom-file">
                                <input type="text" name="watch_image" class="form-control" id="watch_image" value="{{ generalsettings()->watch_image }}">
                            </div>
                            @error('watch_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Compay Name</label>
                            <input type="text" name="company_name" value="{{ generalSettings()->company_name }}" id="email" class="form-control" placeholder="Enter Company Name"/>
                            @error('company_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Open Day* <span class="text text-danger">e.g (Mon-Fri)</span></label>
                            <input type="text" name="open_day" value="{{ generalSettings()->open_day }}" id="email" class="form-control" placeholder="Enter Open Day"/>
                            @error('open_day')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>      
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Open Day Time* <span class="text text-danger">e.g (10:00 am - 7.00 pm )</span></label>
                            <input type="text" name="open_day_time" value="{{ generalSettings()->open_day_time }}" id="email" class="form-control" placeholder="Enter Open Day Time"/>
                            @error('open_day_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div> 
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Close Day* <span class="text text-danger">e.g (Saturday & Sunday )</span></label>
                            <input type="text" name="close_day" value="{{ generalSettings()->close_day }}" id="email" class="form-control" placeholder="Enter Close Day"/>
                            @error('close_day')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{ generalSettings()->address }}" id="address" class="form-control" placeholder="Enter address"/>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>                              
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" value="{{ generalSettings()->email }}" id="email" class="form-control" placeholder="Enter email address"/>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alter_email">Alternative Email address</label>
                            <input type="email" name="alter_email" value="{{ generalSettings()->alter_email }}" id="alter_email" class="form-control" placeholder="Enter email address"/>
                            @error('alter_email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" value="{{ generalSettings()->phone }}" id="phone" class="form-control" placeholder="Enter phone number"/>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alter_phone">Alternative Phone number</label>
                            <input type="text" name="alter_phone" value="{{ generalSettings()->alter_phone }}" id="alter_phone" class="form-control" placeholder="Enter Alternative phone number"/>
                            @error('alter_phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" value="{{ generalSettings()->meta_keywords }}" id="meta_keywords" class="form-control" placeholder="Enter meta keywords"/>
                            @error('meta_keywords')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ generalSettings()->meta_title }}" id="meta_title" class="form-control" placeholder="Enter meta title"/>
                            @error('meta_title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <input type="text" name="meta_description" value="{{ generalSettings()->meta_description }}" id="meta_description" class="form-control" placeholder="Enter meta description"/>
                            @error('meta_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="copyright_text">Copyright Text</label>
                            <input type="text" name="copyright_text" value="{{ generalSettings()->copyright_text }}" id="copyright_text" class="form-control" placeholder="Enter meta description"/>
                            @error('copyright_text')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="about_description">About Us Description <small class="text-danger">*</small></label>
                            <div>
                                <textarea name="about_description" placeholder="Enter About Us Description" class="form-control" rows="7">{{ generalSettings()->about_description }}</textarea>
                            </div>
                        </div>
                        @error('about_description')
                            <div class="alert alert-danger">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>   
                    <div class="col-12">
                        <div class="form-group">
                            <label for="footer_description">Footer Description <small class="text-danger">*</small></label>
                            <div>
                                <textarea name="footer_description" placeholder="Enter Short footer_descriptionn" class="form-control">{{ generalSettings()->footer_description }}</textarea>
                            </div>
                        </div>
                        @error('footer_description')
                            <div class="alert alert-danger">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light w-100 w-sm-auto">Submit</button>
                    </div>
            </form>
        </div>
        <!-- /.card -->
        </div>
        <div class="col-md-6">
        </div>
    </div>
    </div>
</section>
@endsection