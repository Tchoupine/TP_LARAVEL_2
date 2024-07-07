@extends('layouts.app')

@section('content')
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
                            <div class="develop-list-pro">
                                <div class="cart-hover">
                                    <a href="{{ route('freelancers.edit', $freelancer->id) }}" class="btn-cart mb-2" tabindex="-1">Edit</a>
                                    <a href="{{ route('details', $freelancer->id) }}" class="btn-cart" tabindex="-1">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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
