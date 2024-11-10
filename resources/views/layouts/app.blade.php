@php
    $links = [
    [
        'name' => "Home",
        'url' => route('home'),
        'active' => request()->routeIs('home')
    ],

    [
        'name' => "About Us",
        'url' => route('about'),
        'active' => request()->routeIs('about')
    ], 
    
    [
        'name' => "Our Features",
        'url' => route('features'),
        'active' => request()->routeIs('features')
    ],

    [
        'name' => "Classes",
        'url' => route('class'),
        'active' => request()->routeIs('class')
    ],

    [
        'name' => "Contact",
        'url' => route('contact'),
        'active' => request()->routeIs('contact')
    ],];    
@endphp
<!DOCTYPE html>
<html lang="{{session('lang')}}">

<head>
    <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    @livewire('navigation-menu')
    <!-- Navbar End -->

    {{ $slot }}


    <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">{{__('Get In Touch')}}</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">{{__('Quick Links')}}</h4>
                <div class="d-flex flex-column justify-content-start">
                    @foreach ($links as $link)
                        <a class="text-white mb-2" href="{{$link['url']}}"><i class="fa fa-angle-right mr-2"></i>{{__($link['name'])}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">{{__('Popular Links')}}</h4>
                <div class="d-flex flex-column justify-content-start">
                    @foreach ($links as $link)
                        <a class="text-white mb-2" href="{{$link['url']}}"><i class="fa fa-angle-right mr-2"></i>{{__($link['name'])}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">{{__('Opening Hours')}}</h4>
                <h5 class="text-white">{{__('Monday')}} - {{__('Friday')}}</h5>
                <p>8.00 AM - 8.00 PM</p>
                <h5 class="text-white">{{__('Saturday')}} - {{__('Sunday')}}</h5>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5 d-flex justify-content-between">
            <p class="m-0 w-50 text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
            <form action="{{route('localization')}}" id="formLocalization">
                <select name="lang" class="form-control" onchange="document.getElementById('formLocalization').submit()">
                    <option value="" selected>Select Language</option>
                    <option value="es" @selected(session('lang') == "es")>Espanol</option>
                    <option value="en" @selected(session('lang') == "en")>English</option>
                    <option value="fr" @selected(session('lang') == "fr")>French</option>
                    <option value="de" @selected(session('lang') == "de")>German</option>
                    <option value="zh_CN" @selected(session('lang') == "zh_CN")>Chinese</option>
                </select>
            </form>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
