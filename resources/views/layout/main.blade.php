<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>kiaa-laravel </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href=" {{asset('assets/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet"
    </head>
    <body>

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg bg-success navbar-dark">
            <div class="container" >
            <a class="navbar-brand" href="#">kiaa-laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->segment('1') =='' || request()->segment('1') == 'home')?
                        'active' : '' }}" aria-current="page" href=" {{ url ('home') }}">
                            <i class="fas fa-tachometer-alt"></i>  Home
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link {{ (request()->segment('1')== 'students')? 'active' : ''}}"
                                aria-current="page" href="{{ url('/students') }}">
                                <i class="fas fa-user"></i>Students
                            </a>
                </ul>
            </div>
            </div>
        </nav>
            {{-- end --}}


            {{-- content --}}
            <div class="mt-2">
                <div class="container">
                <div class="card">
                    @yield('content')
                </div>
            </div>
            {{-- end content --}}
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>

