<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Style -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,700&display=swap&subset=cyrillic-ext" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('wolf/css/lux.css') }}">
    <link rel="stylesheet" href="{{ asset('wolf/css/app.css') }}">
</head>
<body>
    <div id="app" class="app">
        
        <div class="case">
            <div class="contain">

                <!-- Left menu -->
                @include('wolf.sidebar')

                <!-- Main cotent -->
                <section class="page">
                    <!-- Session Message -->
                    @if (session('status'))
                        <div class="alert alert-dismissible alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{ now() }}</strong> <a class="alert-link">{{ auth()->user()->name }}</a> {{ session('status') }}
                        </div>
                    @endif
                    <!-- Cotent -->
                	@yield('content')
                </section>

            </div>
        </div>

    </div>

    <div class="wolframium">
        <a href="https://wolframium.net" target="_blank">Powered by Wolframium</a>
    </div>

    <!-- Java-Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="{{ asset('wolf/js/app.js') }}"></script>

</body>
</html>