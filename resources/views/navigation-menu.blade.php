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

<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="/" class="navbar-brand">
            <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4 bg-secondary">
                @foreach ($links as $link)
                    <a href="{{$link["url"]}}" class="nav-item nav-link {{$link["active"] ? 'active': '' }}">{{__($link["name"])}}</a>
                @endforeach
            </div>
        </div>
    </nav>
</div>