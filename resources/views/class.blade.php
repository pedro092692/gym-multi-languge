<x-app-layout>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Gym Classes</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Gym Classes</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5" style="margin-top: 90px;">
        <x-gym-class>
        </x-gym-class>
    </div>
    <!-- Gym Class End -->


    <!-- Class Timetable Start -->
    <x-gym-clasess>
    </x-gym-clasess>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <x-b-m-i>
    </x-b-m-i>
    <!-- BMI Calculation End -->
</x-app-layout>
