<!DOCTYPE html>
<html lang="en">



<body class="home-page bg-one"> 

  


    <div class="main-wrapper">


    @include('layouts.header')
    @yield('content')

    @include('layouts.footer_content')
    @include('layouts.footer_bottom')


    @yield('js')
</body>
</html>




    