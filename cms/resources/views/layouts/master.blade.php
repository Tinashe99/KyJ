<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelCMS</title>
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>

        body {
            padding-top: 54px;
        }

        @media (min-width: 992px)
        {
            body{
                padding-top: 56px;
            }
        }
    </style>
</head>
<body>
   <nav class = "navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class = "container">
           <a class = "navbar-brand" href = "/">LaravelCMS</a>
           <div class = "collapse navbar-collapse" id = "navbarResponsive">
               <ul class = "navbar-nav ml-auto">
                    @if (Route::has('login'))
                    @auth
                    <li class = "nav-item">
                        <a class = "nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "{{ route('logout') }}"
                                                onclick = "event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                            Log out
                        </a>
                        <form id = "logout-form" action = "{{ route('logout') }}" method = "POST" style = "display: none;">
                            @csrf
                        </form>
                    </li>

                    @else
                    <li class = "nav-item">
                        <a class = "nav-link" href = "{{ route('register') }}">Register</a>
                    </li>
                    @endauth
                    @endif
               </ul>
            </div>
        </div>
    </nav>

    <div id = "app">
        @yield('content')
    </div>

    <footer class = "py-5 bg-dark">
        <div class = "container">
            <p class = "m-0 text-center text-white">Copyright KyJ Group 2021</p>
        </div>
    </footer>
</body>
</html>