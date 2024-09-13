<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    {{--    slider css code here--}}
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    {{--    slider css code ends here--}}
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body style="font-family: 'Open Sans', system-ui; overflow-x: hidden">

@include('Layouts.header')
@yield('content')
@include('Layouts.footer')

{{--slider script code here--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
{{--slider script ends here--}}


{{--<script>--}}
{{--       function index(){--}}
{{--         const currentHash = window.location.hash;--}}
{{--         if (currentHash === '#about') {--}}
{{--             document.getElementById('aboutNav').classList.add('bg-primaryColor', 'font-bold');--}}
{{--         } else if (currentHash === '#gallery') {--}}
{{--             document.getElementById('gallery').classList.add('bg-primaryColor', 'font-bold');--}}
{{--         } else if (currentHash === '#performance') {--}}
{{--             document.getElementById('performance').classList.add('bg-primaryColor', 'font-bold');--}}
{{--         } else if (currentHash === '#testimonials') {--}}
{{--             document.getElementById('testimonials').classList.add('bg-primaryColor', 'font-bold');--}}
{{--         }else if (currentHash === '#footer') {--}}
{{--             document.getElementById('footer').classList.add('bg-primaryColor', 'font-bold');--}}
{{--         } else {--}}
{{--             // Default to home if no fragment or different fragment--}}
{{--             document.getElementById('home').classList.add('bg-primaryColor', 'font-bold');--}}
{{--         }--}}
{{--     }--}}
{{--</script>--}}

<script>
    // when scroll change the header background color
    window.addEventListener('scroll', function () {
        var header = document.getElementById('header');
        if (window.scrollY > 0) {
            header.style.backgroundColor = 'rgba(0,0,0,0.94)';
        } else {
            header.style.backgroundColor = 'transparent';
        }
    });


</script>
@stack('scripts')

</body>
</html>
