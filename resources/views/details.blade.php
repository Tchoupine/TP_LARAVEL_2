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
        <h2>Freelancer Details</h2>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Freelancer Details</li>
        </ol>
        </nav>
        </div>
        </div>
        </div>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn-cart text-center" style="width: 150px; margin-left: 80%; margin-top:3%" >Cancel</a>
    <div class="content">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-12">
        <div class="company-detail-block pt-0">
        <div class="company-detail">
        <div class="company-detail-image">
        <img src={{$freelancer->photo}} class="img-fluid" alt="logo">
        </div>
        <div class="company-title">
        <h4>{{$freelancer->first_name}}</h4>
        <p>{{$freelancer->profession}}</p>
        </div>
        </div>
        <div class="company-address">
        <ul>
        <li>
        <i class="feather-map-pin"></i>{{$freelancer->city}}
        </li>
        <li>
        <i class="feather-calendar"></i>22 September 2023
        </li>
        <li>
        <i class="feather-star"></i>5.0, 245 Reviews
        </li>
        </ul>
        </div>
        <div class="project-proposal-detail">
        <ul>
        <li>
        <div class="proposal-detail-img">
        <img src="assets/img/icon/computer-line.svg" alt="icons">
        </div>
        <div class="proposal-detail text-capitalize">
        <span class=" d-block">Recommended</span>
        <p class="mb-0">89%</p>
        </div>
        </li>
        <li>
        <div class="proposal-detail-img">
        <img src="assets/img/icon/time-line.svg" alt="icons">
        </div>
        <div class="proposal-detail text-capitalize">
        <span class=" d-block">Completed Projects</span>
        <p class="mb-0">220</p>
        </div>
        </li>
        <li>
        <div class="proposal-detail-img">
        <img src="assets/img/icon/time-line.svg" alt="icons">
        </div>
        <div class="proposal-detail text-capitalize">
        <span class=" d-block">Ongoing Projects</span>
        <p class="mb-0">10</p>
        </div>
        </li>
        <li>
        <div class="proposal-detail-img">
        <img src="assets/img/icon/user-heart-line.svg" alt="icons">
        </div>
        <div class="proposal-detail text-capitalize">
        <span class=" d-block">Feedbacks</span>
        <p class="mb-0">78</p>
        </div>
        </li>
        <li>
        <div class="proposal-detail-img">
        <img src="assets/img/icon/translate-2.svg" alt="icons">
        </div>
        <div class="proposal-detail text-capitalize">
        <span class=" d-block">Rehired</span>
        <p class="mb-0">Rehired</p>
        </div>
        </li>
        <li>
        <div class="proposal-detail-img">
        <img src="assets/img/icon/translate.svg" alt="icons">
        </div>
        <div class="proposal-detail text-capitalize">
        <span class=" d-block">Response Times</span>
        <p class="mb-0">1 Hour</p>
        </div>
        </li>
        </ul>
        </div>
        </div>
        <div class="company-detail-block company-description">
        <h4 class="company-detail-title">Description</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
        <div class="company-detail-block company-description">
        <h4 class="company-detail-title">Experience</h4>
        <div class="experience-set">
        <div class="experience-set-img">
        <img src="assets/img/icon/expereience.png" alt="img">
        </div>
        <div class="experience-set-content">
        <h5>Team Leader<span>2017 - 2023</span></h5>
        <span>{{$freelancer->profession}}</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
        </div>
        <div class="experience-set">
        <div class="experience-set-img">
        <img src="assets/img/icon/expereience.png" alt="img">
        </div>
        <div class="experience-set-content">
        <h5>Senior {{$freelancer->profession}}<span>2019 - 2021</span></h5>
        <span>{{$freelancer->profession}}</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
        </div>
        <div class="experience-set">
        <div class="experience-set-img">
        <img src="assets/img/icon/expereience.png" alt="img">
        </div>
        <div class="experience-set-content">
        <h5>junior {{$freelancer->profession}}<span>2016 - 2019</span></h5>
        <span>{{$freelancer->profession}}</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
        </div>
        </div>
        <div class="company-detail-block company-description">
        <h4 class="company-detail-title">Education</h4>
        <div class="experience-set">
        <div class="experience-set-img">
        <img src="assets/img/icon/report.png" alt="img">
        </div>
        <div class="experience-set-content">
        <h5>Master Degree<span>2013 - 2016</span></h5>
        <span>Arizona State University</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
        </div>
        <div class="experience-set">
        <div class="experience-set-img">
        <img src="assets/img/icon/report.png" alt="img">
        </div>
        <div class="experience-set-content">
        <h5>Bachelor Degree<span>2010 - 2013</span></h5>
        <span>Arizona State University</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
        </div>
        </div>
        <div class="company-detail-block pb-0">
        <h4 class="company-detail-title">Review (5)</h4>
        <div class="project-proposals-block ">
        <div class="project-proposals-img">
        <img src="assets/img/user/avatar-1.jpg" class="img-fluid" alt="user">
        </div>
        <div class="project-proposals-description">
        <div class="proposals-user-detail">
        <div>
        <h5>Theresa Phillips</h5>
        <ul class="d-flex">
        <li>
        <div class="proposals-user-review">
        <span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
        </div>
        </li>
        <li>
        <div class="proposals-user-review">
        <span><i class="feather-calendar"></i>1 min ago</span>
        </div>
        </li>
        </ul>
        </div>
        <div>
        <div class="proposals-pricing">
        <h4>$40-$500</h4>
        <span>Price : Fixed </span>
        </div>
        </div>
        </div>
        <p class="mb-0">I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
        </div>
        </div>
        <div class="project-proposals-block ">
        <div class="project-proposals-img">
        <img src="assets/img/user/avatar-2.jpg" class="img-fluid" alt="user">
        </div>
        <div class="project-proposals-description">
        <div class="proposals-user-detail">
        <div>
        <h5>Aaron Storey</h5>
        <ul class="d-flex">
        <li>
        <div class="proposals-user-review">
        <span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
        </div>
        </li>
        <li>
        <div class="proposals-user-review">
        <span><i class="feather-calendar"></i>1 min ago</span>
        </div>
        </li>
        </ul>
        </div>
        <div>
        <div class="proposals-pricing">
        <h4>$20-$350</h4>
        <span>Price : Fixed </span>
        </div>
        </div>
        </div>
        <p class="mb-0">I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
        </div>
        </div>
        <div class="project-proposals-block ">
        <div class="project-proposals-img">
        <img src="assets/img/user/avatar-3.jpg" class="img-fluid" alt="user">
        </div>
        <div class="project-proposals-description">
        <div class="proposals-user-detail">
        <div>
        <h5>Aaron Storey</h5>
        <ul class="d-flex">
        <li>
        <div class="proposals-user-review">
        <span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
        </div>
        </li>
        <li>
        <div class="proposals-user-review">
        <span><i class="feather-calendar"></i>1 min ago</span>
        </div>
        </li>
        </ul>
        </div>
        <div>
        <div class="proposals-pricing">
        <h4>$50-$200</h4>
        <span>Price : Fixed </span>
        </div>
        </div>
        </div>
        <p class="mb-0">I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
        </div>
        </div>
        <div class="project-proposals-block ">
        <div class="project-proposals-img">
        <img src="assets/img/user/avatar-4.jpg" class="img-fluid" alt="user">
        </div>
        <div class="project-proposals-description">
        <div class="proposals-user-detail">
        <div>
        <h5>Archer Crossley</h5>
        <ul class="d-flex">
        <li>
        <div class="proposals-user-review">
        <span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
        </div>
        </li>
        <li>
        <div class="proposals-user-review">
        <span><i class="feather-calendar"></i>1 min ago</span>
        </div>
        </li>
        </ul>
        </div>
        <div>
        <div class="proposals-pricing">
        <h4>$10-$450</h4>
        <span>Price : Fixed </span>
        </div>
        </div>
        </div>
        <p class="mb-0">I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
        </div>
        </div>
        <div class="project-proposals-block ">
        <div class="project-proposals-img">
        <img src="assets/img/user/avatar-5.jpg" class="img-fluid" alt="user">
        </div>
        <div class="project-proposals-description">
        <div class="proposals-user-detail">
        <div>
        <h5>Amy Stockdill</h5>
        <ul class="d-flex">
        <li>
        <div class="proposals-user-review">
        <span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
        </div>
        </li>
        <li>
        <div class="proposals-user-review">
        <span><i class="feather-calendar"></i>5 min ago</span>
        </div>
        </li>
        </ul>
        </div>
        <div>
        <div class="proposals-pricing">
        <h4>$300-$350</h4>
        <span>Price : Fixed </span>
        </div>
        </div>
        </div>
        <p class="mb-0">I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
        </div>
        </div>
        </div>
        </div>
        
        <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">
        <div class="card budget-widget">
        <div class="budget-widget-details">
        <h6>Budget</h6>
        <h4>$125 - $180</h4>
        <p class="mb-0">Hourly Rate</p>
        <ul class="buget-profiles">
        <li>
        <h6><i class="feather-map-pin me-2"></i>Location</h6>
        <h5>{{$freelancer->city & $freelancer->country}}</h5>
        </li>
        <li>
        <h6><i class="feather-airplay me-2"></i>Years of Experience</h6>
        <h5>5 Years</h5>
        </li>
        <li>
        <h6><i class="feather-calendar me-2"></i>Delivery Time</h6>
        <h5>3-5 Days</h5>
        </li>
        <li>
        <h6><i class="feather-globe me-2"></i>Language Level</h6>
        <h5>Basic</h5>
        </li>
        <li>
        <h6><i class="feather-phone me-2"></i>Phone</h6>
        <h5>{{$freelancer->phone_number}}</h5>
        </li>
        <li>
        <h6><i class="feather-mail me-2"></i>Mail</h6>
        <h5>{{$freelancer->email_address}}</h5>
        </li>
        </ul>
        </div>
        </div>
        <div class="card budget-widget">
        <h6>Skills</h6>
        <div class="tags">
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Whiteboard</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Software Design</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML5</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Design Writing</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Whiteboard</span></a>
        <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web design</span></a>
        </div>
        </div>
        <div class="card budget-widget">
        <h6>Location</h6>
        <div class="map-location p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
        </div>
        </div>
        </div>
        
        </div>
        </div>
    </div>
    

@endsection

@section('js')
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="57df502fc91ef54fb1364251-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="assets/plugins/moment/moment.min.js" type="57df502fc91ef54fb1364251-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="assets/plugins/summernote/dist/summernote-lite.min.js" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="assets/js/script.js" type="57df502fc91ef54fb1364251-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="57df502fc91ef54fb1364251-|49" defer></script>
@endsection