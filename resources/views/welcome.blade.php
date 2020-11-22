<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="display-4">Our Videos</h1>
                        <p class="lead">You selected the category : {{ $category}}</p>
                        <p class="lead">You selected the provider : {{ $provider}}</p>

                        <hr class="my-4">

                        <a class="btn btn-primary btn-lg" href="{{route('profile')}}" role="button">Admin Login</a>
                        <a class="btn btn-secondary btn-lg" href="{{route('profile')}}" role="button">Video List</a>
                    </div>
                </div>

            </div>

        </div>


    </body>

</html>