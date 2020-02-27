<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.scrollbar.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    @yield('content')
    <script src="{{asset('assets/js/jquery-latest.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollbar.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.scrollbar-inner').scrollbar();
        });

    </script>
    @yield('scripts')
</body>

</html>
