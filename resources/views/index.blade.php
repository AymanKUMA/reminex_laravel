@extends('layout')

@section('refresh')
@if (count($slides) >= 4)
    <meta http-equiv="refresh" content="{{count($slides)  * 10}}">
@else
    <meta http-equiv="refresh" content="30"> 
@endif    
@endsection
@section('title', 'DIRECTION REMINEX')

@section('content')
<!-- header section starts  -->


<header class="header">
    <nav class="navbar">
        <a href="#">
            <marquee width="100%" direction="left">
                @unless (count($alerts) == 0)
                    @foreach ($alerts as $alert)
                        {{$alert->alert}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @endforeach
                @else
                    this is a sample text that shows the latest notifications about reminex direction
                @endunless
            </marquee>
        </a>
    </nav>
    <div class="logoContainer">
        <a href="#" class="logo"><img src="{{ url('images/logo.svg') }}" alt=""></a>
        @auth
            
        @else
            <a href="{{ route('home.login') }}" class="button"><img
                src="{{ url('images/log-in.png') }}" alt=""> CONNEXION</a>
        @endauth
        
    </div>
</header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">
            @unless (count($slides) == 0)
                @foreach($slides as $slide)
                    @if($slide['layout'] == 1 )
                        <div class="swiper-slide fade">
                            <?php
                                echo '<div class="box" style="background: url(data:image;base64,'.base64_encode($slide['image']).' ); no-repeat;">';
                            ?>
                                <div class="content">
                                    <h3>{{ $slide->title }}</h3>
                                    <span>{{ $slide->subtitle }}</span>
                                    <p>{{ $slide->description }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="swiper-slide fade">
                            <div class="box second"
                                style="background: url({{ url('images/home-bg-2.jpg') }}) no-repeat;">
                                <div class="content">
                                    <h3>{{ $slide->title }}</h3>
                                    <span>{{ $slide->subtitle }}</span>
                                    <p>{{ $slide->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach    
            @else
                <div class="swiper-slide fade">
                    <div class="box"
                        style="background: url({{ url('images/home-bg-1.jpg') }}) no-repeat;">
                        <div class="content">
                            <h3>Hello world</h3>
                            <span>Welcome</span>
                            <p>this is REMINEX direction dynamic slider, here you can see the latest news within our
                                company. stay tuned for news</p>
                        </div>
                    </div>
                </div>
            @endunless
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>
@endsection
