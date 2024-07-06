<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-lite.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

@include('layouts.header')


@include('details.layouts.head')


<div class="content">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12">
@include('details.layouts.profil')
@include('details.layouts.description')
@include('details.layouts.experience')
@include('details.layouts.education')
@include('details.layouts.reviews')
</div>

<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">
@include('details.layouts.budgets')
@include('details.layouts.skills')
@include('details.layouts.locations')
</div>

</div>
</div>
</div>


<footer class="footer">
@include('layouts.footer_content')


@include('layouts.footer_bottom')

</footer>

</div>





@include('details.layouts.modal_budget')


{{-- <div class="modal fade custom-modal" id="success">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content proposal-modal-info">
<div class="modal-header">
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="text-center modal-body-content pt-0">
<h5 class="modal-title">Submitted Successfully</h5>
<p>You will be Notified once, your Proposal approves.</p>
</div>
<div class="col-md-12 submit-section text-center">
<a data-bs-dismiss="modal" href="freelancer-dashboard.html" class="btn btn-primary submit-btn">Go to Dashboard</a>
</div>
</div>
</div>
</div>
</div> --}}

@yield('js')
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:04 GMT -->
</html>