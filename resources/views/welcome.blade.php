<x-app-layout>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">{{__('Gym & Fitness Center')}}</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">{{__('Best Gym In Town')}}</h2>
                        <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">{{__('Join Us Now')}}</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">{{__('Gym & Fitness Center')}}</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">{{__('Get Body In Shape')}}</h2>
                        <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">{{__('Join Us Now')}}</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5">
        <x-gym-class>
        </x-gym-class>
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
    <x-about-us>
    </x-about-us>
    <!-- About End -->


    <!-- Features Start -->
    <x-features>
    </x-features>
    <!-- Features End -->


    <!-- GYM Feature Start -->
    <x-gym-features>
    </x-gym-features>
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
    <div class="subscribe container-fluid my-5 py-5 text-center">
        <h4 class="display-4 text-white font-weight-bold mt-5 mb-3">{{__('Subscribe Our Newsletter')}}</h4>
        <p class="text-white mb-4">{{__('Subscribe and get Our latest article in your inbox')}}</p>
        <form class="form-inline justify-content-center mb-5">
            <div class="input-group">
                <input type="text" class="form-control-lg" placeholder="{{__('Your Email')}}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">{{__('Subscribe')}}</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
    <x-gym-clasess>
    </x-gym-clasess>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <x-b-m-i>
    </x-b-m-i>
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <x-trainers>
    </x-trainers>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <x-testimonial>
    </x-testimonial>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">{{__('Our Blog')}}</h4>
            <h4 class="display-4 font-weight-bold">{{__('Latest Article From Blog')}}</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="img/blog-1.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">{{__('Jan')}}</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos,
                    sed ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod
                    vero dolor sed kasd accusam</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">{{__('Read More ')}}<i
                        class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="img/blog-2.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">{{__('Jan')}}</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos,
                    sed ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod
                    vero dolor sed kasd accusam</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">{{__('Read More ')}}<i
                        class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- Blog End -->
</x-app-layout>
