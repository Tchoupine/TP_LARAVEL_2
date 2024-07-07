@extends('layouts.app')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>KofeJob</title>

        <link rel="shortcut icon" href=".../../assets/img/favicon.png" type="image/x-icon">

        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../../assets/css/animate.min.css">
        <link rel="stylesheet" href="../../assets/css/animate.css">

        <link rel="stylesheet" href="../../assets/plugins/feather/feather.css">

        <link rel="stylesheet" href="../../assets/plugins/aos/aos.css">

        <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">

        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>


    <header class="header">
        <div class="container">
        <nav class="navbar navbar-expand-lg header-nav p-0">
        <div class="navbar-header">
        <a id="mobile_btn" href="javascript:void(0);">
        <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
        </span>
        </a>
        <a href="{{route ('home')}}" class="navbar-brand logo">
        <img src="../../assets/img/logo.svg" class="img-fluid" alt="Logo">
        </a>
        </div>
        <div class="main-menu-wrapper">
        <div class="menu-header">
        <a href="{{route ('home')}}" class="menu-logo">
        <img src="../../assets/img/logo.svg" class="img-fluid" alt="Logo">
        </a>
        <a id="menu_close" class="menu-close" href="javascript:void(0);">
        <i class="fas fa-times"></i>
        </a>
        </div>
        <ul class="main-nav">
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="{{ request()->routeIs('table') ? 'active' : '' }}">
                <a href="{{ route('table') }}">Freelancer</a>
            </li>
            
        </ul>
        
        </div>
       
        </ul>
        </nav>
        </div>
    </header>


    <div class="bread-crumb-bar">
        <div class="container">
        <div class="row align-items-center inner-banner">
        <div class="col-md-12 col-12 text-center">
        <div class="breadcrumb-list">
        <h2>Edit Freelancer </h2>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route ('home')}}"> Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Edit Freelancer</li>
        </ol>
        </nav>
        </div>
        </div>
        </div>
        </div>
    </div>

    <div class="col-xl-9 col-lg-8 ml-20">
        <div class="pro-pos">
            <div class="setting-content employee-profile-new">

                
                <form style="margin-left: 30%" action="{{ route('freelancers.update', $freelancer->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="pro-head">

                        </div>
                        <div class="pro-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-row pro-pad pt-0 ps-0">
                                        <div class="input-block col-md-6 pro-pic">
                                            <h4 class="mb-3">Personal Information</h4>
                                            <label class="form-label">Profile Picture</label>
                                            <div class="d-flex align-items-center">
                                                <div class="upload-images">
                                                <img src="../../assets/img/img-02.jpg" value="{{$freelancer->photo}}" alt="Image" id="blah">
                                                </div>
                                                <div class="ms-3">
                                                <label class="file-upload image-upbtn ms-0">
                                                Upload Image <input type="file" value="{{$freelancer->photo}}" id="imgInp" id="photo" name="photo" alt="profile">
                                                </label>
                                                <p>Max Image size 300*300</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" value="{{$freelancer->first_name}}" class="form-control" id="first_name" name="first_name">
                                    </div>
                                    </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input class="form-control" value="{{$freelancer->last_name}}" type="text" id="last_name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input class="form-control" value="{{$freelancer->phone_number}}" type="text" id="phone_number" name="phone_number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input class="form-control" value="{{$freelancer->email_address}}" type="email" id="email_address" name="email_address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <input class="form-control" value="{{$freelancer->country}}" type="text" id="country" name="country" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input class="form-control" value="{{$freelancer->city}}" type="text" id="city" name="city" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control" value="{{$freelancer->address}}" type="text" id="address" name="address" required>
                                    </div>
                                </div>
                                 <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Profession</label>
                                        <select class="form-control" class="select" value="{{$freelancer->profession}}" name="profession">
                                            <option value="Developer">Developer</option>
                                            <option value="Designer">Designer</option>
                                            <option value="Manager">Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">CV</label>
                                        <input class="form-control" value="{{$freelancer->cv}}" type="file" id="cv" name="cv" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <div>
                                            <label class="form-check-label me-3">
                                                <input type="radio" name="gender" value="male" class="form-check-input" {{ $freelancer->gender == 'male' ? 'checked' : '' }}> Male
                                            </label>
                                            <label class="form-check-label">
                                                <input type="radio" name="gender" value="female" class="form-check-input" {{ $freelancer->gender == 'female' ? 'checked' : '' }}> Female
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-end border-0">
                        <div class="pro-body">
                            <a href="javascript:history.back()" class="btn btn-primary click-btn btn-plan">Cancel</a>

                            <button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
                           
                        </div>
                    </div>
                </form> 



            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="../../assets/js/jquery-3.7.1.min.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>

    <script src="../../assets/js/bootstrap.bundle.min.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>

    <script src="../../assets/js/owl.carousel.min.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>

    <script src="../../assets/js/jquery.waypoints.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>
    <script src="../../assets/js/jquery.counterup.min.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>

    <script src="../../assets/plugins/aos/aos.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>

    <script src="../../assets/plugins/select2/js/select2.min.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>

    <script src="../../assets/js/slick.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>

    <script src="../../assets/js/script.js" type="0cd2fbd203f5dbcf951f401f-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0cd2fbd203f5dbcf951f401f-|49" defer></script>
@endsection
