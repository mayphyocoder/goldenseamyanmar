<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Golden Sea Myanmar Co.,Ltd - @yield('title') </title>
    <meta name="keywords" content="Golden Sea Myanmar Co.,Ltd" />
    <meta name="author" content="Golden Sea Myanmar Co.,Ltd" />
    <meta name="robots" content="Golden Sea Myanmar Co.,Ltd" />
    <meta name="description" content="Golden Sea Myanmar Co.,Ltd" />
    <link rel="shortcut icon" href="{{ asset('assets/data/logo.jpeg') }}" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/data/logo.jpeg') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/data/logo.jpeg') }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>


<style>
    .gradient-border {
        --border-width: 4px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Lato, sans-serif;
        font-size: 2.5rem;
        text-transform: uppercase;
        color: white;
        background: white;
        border-radius: var(--border-width);
        border-radius: 15px 30px;

        &::after {
            position: absolute;
            content: "";
            top: calc(-1 * var(--border-width));
            left: calc(-1 * var(--border-width));
            z-index: -1;
            width: calc(100% + var(--border-width) * 2);
            height: calc(100% + var(--border-width) * 2);
            background: linear-gradient(60deg,
                    hsl(224, 85%, 66%),
                    hsl(269, 85%, 66%),
                    hsl(314, 85%, 66%),
                    hsl(359, 85%, 66%),
                    hsl(44, 85%, 66%),
                    hsl(89, 85%, 66%),
                    hsl(134, 85%, 66%),
                    hsl(179, 85%, 66%));
            background-size: 300% 300%;
            background-position: 0 50%;
            border-radius: calc(2 * var(--border-width));
            animation: moveGradient 3s alternate infinite;
            border-radius: 15px 30px;
        }
    }

    @keyframes moveGradient {
        50% {
            background-position: 100% 50%;
        }
    }



    /* Font Design  */
    @keyframes textShine {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 100% 50%;
        }
    }

    .font-design1 {
        font-size: clamp(2.8rem, 1.5vw, 3rem);
        font-weight: bold;
        margin: 5px;
        background: linear-gradient(to right,
                #061E5E 20%,
                #00affa 30%,
                #0190cd 70%,
                #c43477 80%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
        background-size: 500% auto;
        animation: textShine 5s ease-in-out infinite alternate;
    }
</style>

<body>
    <div class="pageWrapper">
        @include('layouts.menu')
        @if (URL::current() == route('welcome'))
            {{-- @include('layouts.slider') --}}
            @include('layouts.slider.nova_slider')
        @endif

        @yield('content')

        @include('layouts.footer')
    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/js/main-slider-script.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nova/jquery.nivo.slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>


    @yield('script')

    <script type="text/javascript">
        $(window).load(function() {
            $('#Novaslider').nivoSlider({
                effect: 'random',
                slices: 15,
                boxCols: 8,
                boxRows: 4,
                animSpeed: 500,
                pauseTime: 3000,
                startSlide: 0,
                directionNav: true,
                controlNav: true,
                controlNavThumbs: false,
                pauseOnHover: true,
                manualAdvance: false,
                prevText: 'Prev',
                nextText: 'Next',
                randomStart: false,
                beforeChange: function() {},
                afterChange: function() {},
                slideshowEnd: function() {},
                lastSlide: function() {},
                afterLoad: function() {}
            });
        });
    </script>
</body>

</html>
