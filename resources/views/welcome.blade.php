<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem Penyelian dan Semakan Pelajar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0px;
        padding: 0px;
        background: #85e028;
        font-family: 'Didact Gothic', sans-serif;
        font-size: 12pt;
        font-weight: 200;
        color: #FFF;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;


            }
            a:hover
    {
        text-decoration: none;
    }

            .m-b-md {
                margin-bottom: 30px;
            }
            .image
    {
        display: inline-block;
    }
    
    .image img
    {
        display: block;
        width: 100%;
    }
    
    .image-full
    {
        display: block;
        width: 100%;
        margin: 0 0 2em 0;
    }
    
    .image-left
    {
        float: left;
        margin: 0 2em 2em 0;
    }
    
    .image-centered
    {
        display: block;
        margin: 0 0 2em 0;
    }
    
    .image-centered img
    {
        margin: 0 auto;
        width: auto;
    }
    ul.style1
    {
    }
    
    ul.actions
    {
    }
    
    ul.actions li
    {
        display: inline-block;
        padding: 0em 0.50em;
    }
    
    .title
    {
        margin-bottom: 3em;
    }
    
    .title h2
    {
        font-size: 2.7em;
    }
    
    .title .byline
    {
        font-size: 1.3em;
        color: rgba(255,255,255,0.60);
    }
    #header-wrapper
    {
        position: relative;
        padding: 5em 0em 7em 0em;
        background: #111111 url(images/header-bg.jpg) no-repeat center;
        background-size: cover;
    }

    #header
    {
        position: relative;
        padding: 5em 0em;
    }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Daftar</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sistem Penyelian dan Semakan Pelajar
                </div>

                <div class="links">
                    
                </div>
            </div>
        </div>
    </body>
</html>
