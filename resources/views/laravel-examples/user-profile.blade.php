@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid">
        <!-- Profile Header -->
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/imgprof.png" alt="Profile Image" class="w-100 border-radius-lg shadow-sm">
                        <a href="javascript:;" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
                        </a>
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        @if(Auth::check())
                            <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                            <p class="mb-0 font-weight-bold text-sm">{{ Auth::user()->role }}</p>
                        @else
                            <h5 class="mb-1">Guest</h5>
                            <p class="mb-0 font-weight-bold text-sm">No role</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="javascript:;" role="tab" aria-controls="overview" aria-selected="true">
                                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g fill="#FFFFFF" fill-rule="nonzero">
                                                <path class="color-background" d="M22.76,19.31 L38.9,11.24 C39.39,10.99 39.59,10.39 39.35,9.9 C39.25,9.7 39.09,9.55 38.9,9.45 L20.27,0.14 C19.91,-0.05 19.47,-0.05 19.1,0.14 L3.1,8.14 C2.61,8.39 2.41,8.99 2.65,9.48 C2.75,9.67 2.91,9.83 3.1,9.93 L21.87,19.31 C22.15,19.45 22.48,19.45 22.76,19.31 Z"></path>
                                                <path class="color-background" d="M23.63,22.43 L23.63,39.88 C23.63,40.43 24.07,40.88 24.63,40.88 C24.78,40.88 24.93,40.84 25.07,40.77 L41.27,32.67 C41.72,32.45 42,32 42,31.5 L42,14.24 C42,13.69 41.55,13.24 41,13.24 C40.84,13.24 40.69,13.28 40.55,13.35 L24.18,21.53 C23.84,21.7 23.63,22.05 23.63,22.43 Z" opacity="0.7"></path>
                                                <path class="color-background" d="M20.45,21.53 L1.45,12.03 C0.95,11.79 0.35,11.99 0.11,12.48 C0.04,12.62 0,12.77 0,12.93 L0,30.19 C0,30.68 0.28,31.14 0.73,31.36 L19.55,40.78 C20.05,41.02 20.65,40.82 20.89,40.33 C20.96,40.19 21,40.04 21,39.88 L21,22.43 C21,22.05 20.79,21.7 20.45,21.53 Z" opacity="0.7"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ms-1">Overview</span>
                                </a>
                            </li>
                            <!-- Additional tabs can be added here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Profile Information</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('user.profile.update') }}" method="POST" role="form text-left">
                    @csrf
                    @if($errors->any())
                        <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">{{ $errors->first() }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3 alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">{{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Full Name</label>
                                <div class="@error('name') border border-danger rounded-3 @enderror">
                                    <input class="form-control" value="{{ old('name', Auth::user()->name) }}" type="text" placeholder="Name" id="user-name" name="name">
                                    @error('name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">Email</label>
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input class="form-control" value="{{ old('email', Auth::user()->email) }}" type="email" placeholder="Email" id="user-email" name="email">
                                    @error('email')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user-phone" class="form-control-label">Phone</label>
                        <div class="@error('phone') border border-danger rounded-3 @enderror">
                            <input class="form-control" value="{{ old('phone', Auth::user()->phone) }}" type="text" placeholder="Phone" id="user-phone" name="phone">
                            @error('phone')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user-location" class="form-control-label">Location</label>
                        <div class="@error('location') border border-danger rounded-3 @enderror">
                            <input class="form-control" value="{{ old('location', Auth::user()->location) }}" type="text" placeholder="Location" id="user-location" name="location">
                            @error('location')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about-me" class="form-control-label">About Me</label>
                        <div class="@error('about_me') border border-danger rounded-3 @enderror">
                            <textarea class="form-control" placeholder="Say something about yourself" id="about-me" name="about_me">{{ old('about_me', Auth::user()->about_me) }}</textarea>
                            @error('about_me')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm mt-3 mb-0">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
