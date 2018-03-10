<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        {{--Todo: I think this Bootstrap is redundant it is already somewhere withing Laravel--}}
        <title>Cross or Check</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffefe0;
                color: #120807;
                font-family: 'Verdana', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #646c6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ...proud of my decisions!
                </div>

                <div class="links">
                    <a href="{{route('purpose')}}">Purpose</a>
                    <a href="{{route('rules')}}">Rules</a>
                </div>

                <br/>
                <br/>

                <div id="coc-icons" class="container">
                    <div class="row justify-content-md-center">
                        <div id="cross" class="col col-lg-2">
                            {!! file_get_contents(asset('images/cross.svg')) !!}
                        </div>
                        <div class="col-md-auto">
                            <div id="or" class="mt-5 ml-3"><h1>||</h1></div>
                        </div>
                        <div id="check" class="col col-lg-2 mt-3 ml-3">
                            {!! file_get_contents(asset('images/check.svg')) !!}
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div id="cross" class="col col-lg-2">
                        </div>
                        <div class="col-md-auto">
                            <div id="equal">{!! file_get_contents(asset('images/equal.svg')) !!}</div>
                        </div>
                        <div id="check" class="col col-lg-2">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
