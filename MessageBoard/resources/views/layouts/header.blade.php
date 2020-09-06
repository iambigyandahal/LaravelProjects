<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MessageBoard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                width: 100%;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .msg-nav {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                box-shadow: 2px 2px 5px #ccc;
            }

            .title {
                margin-left: 40px;
                font-size: 44px;
            }

            .msg-auth {
                margin-left: auto;
                margin-right: 40px;
            }

            .msg-auth a {
                color: inherit;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }

            .msg-auth a:not(:first-child) {
                margin-left: 50px;
            }

            .content {
                width: 80%;
                margin: auto;
                margin-top: 20px;
            }

            .content table {
                width: 90%;
                margin: auto;
            }

            .content table td {
                text-indent: 20px;
            }
        </style>
    </head>
    <body>
        <div class="msg-nav">
            <div class="title">
                MessageBoard
            </div>
            @if (Route::has('login'))
                <div class="msg-auth">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        @yield('body')