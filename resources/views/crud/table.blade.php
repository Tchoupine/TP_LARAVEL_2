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
    <div class="bread-crumb-bar">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <div class="breadcrumb-list">
                        <h2>Freelancer table</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Freelancer table</li>
                            </ol>
                            <br><br>
                            <a href="{{ route('freelancers.create') }}" class="btn-cart mb-2" tabindex="-1">New Freelancer</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if(session('success'))
        <div class="alert alert-success" style="color: green">
            {{ session('success') }}
        </div>
    @endif

    @foreach($freelancers as $freelancer)
        <div class="list-book-mark book-mark favour-book">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card list-develop-group">
                        <div class="about-author d-flex align-items-center">
                            <div class="about-list-author d-flex align-items-center">
                                <div class="about-author-img">
                                    <div class="author-img-wrap">
                                        <a href="{{route('details', $freelancer->id)}}">
                                            <img class="img-fluid" alt="Img" src="assets/img/img-02.jpg">
                                            <span class="verified"><i class="fas fa-check-circle"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="author-details d-flex">
                                    <div class="freelance-info">
                                        <h3><a href="{{route('details', $freelancer->id)}}">{{$freelancer->first_name}} {{$freelancer->last_name}}</a></h3>
                                        <div class="freelance-specific">{{$freelancer->profession}}</div>
                                        <div class="freelance-location"><i class="feather-map-pin me-1"></i>{{$freelancer->city}}, {{$freelancer->country}}</div>
                                    </div>
                                    <div class="freelance-rating">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">4.7 (32)</span>
                                        </div>
                                        <div class="freelance-tags border-0">
                                            <a href="javascript:void(0);"><span class="badge badge-pill badge-design">{{$freelancer->email_address}}</span></a>
                                            <a href="javascript:void(0);"><span class="badge badge-pill badge-design">{{$freelancer->phone_number}}</span></a>
                                            <a href="javascript:void(0);"><span class="badge badge-pill badge-design">{{$freelancer->gender}}</span></a>
                                        </div>
                                    </div>
                                    <div class="freelance-price">
                                        <div class="freelance-price-img">
                                            <img src="assets/img/icon/price.png" alt="img">
                                        </div>
                                        <div class="freelance-price-content">
                                            <h6>Price</h6>
                                            <h5>$42 Hourly</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="develop-list-pro" style="width: 250px; ">
                                <div class="cart-hover">
                                    <a href="{{ route('freelancers.edit', $freelancer->id) }}" class="btn-cart mb-2" tabindex="-1">Edit</a>
                                    <form action="{{ route('freelancers.destroy', $freelancer->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this freelancer?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-cart ">Delete</button>
                                    </form>
                                    <a href="{{ route('details', $freelancer->id) }}" class="btn-cart mt-2" tabindex="-1">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-md-12" style="margin-left: 40%">
            {{ $freelancers->links('pagination::bootstrap-4') }}
        </div>
    </div>
    

@endsection

@section('js')
    <script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.waypoints.js" type="text/javascript"></script>
    <script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="assets/plugins/aos/aos.js" type="text/javascript"></script>
    <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/js/slick.js" type="text/javascript"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
@endsection
