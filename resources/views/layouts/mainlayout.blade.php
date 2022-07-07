<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

    

    <title>HOPIN</title>
</head>
<body>
    <header id="site-header" class="fixed-top">
        <nav class="navbar navbar-expand-lg  stroke px-0" style="background-image: linear-gradient(to right, #9CE0DB , #37A299">
            <a class="navbar-brand" href="/">
                <span><img src="../assets/images/logohopin.png" alt="" title="Your logo" style="height:60px; padding-left: 20px; padding-bottom: 5px;" /></span> 
            </a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            {{-- <div class="collapse navbar-collapse fw-bold" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item @@about__active mx-5 hover">
                        <a class="nav-link text-light" href="/laporan"><h5>Laporan</h5></a>
                    </li>
                    <li class="nav-item @@services__active mx-5">
                        <a class="nav-link text-light" href="/quest"><h5> Quest</h5></a>
                    </li>
                    <li class="nav-item @@contact__active mx-5">
                        <a class="nav-link text-light" href="#"><h5>Darurat</h5></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#"><h5> Logout </h5><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div> --}}

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto justify-content-center" style="padding-left: 280px;">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link text-light mx-4 {{ ($title == 'Laporan') ? 'active':'' }}" href="/laporan"><h5>Laporan</h5></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light mx-4 {{ ($title == 'Quest') ? 'active':'' }}" href="/quest"><h5>Quest</h5></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light mx-4 {{ ($title == 'Darurat') ? 'active':'' }}" href="/darurat"><h5>Darurat</h5></a>
                            </li>
                        </ul>
                    </div>
    
                @guest
                <div class="navbar-nav ms-auto mx-3">
                    <a class="nav-link text-light {{ ($title == 'Login') ? 'active':'' }}" href="/login">
                        <h5>
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                        </h5>
                    </a>
                </div>
                @endguest
    
                @auth
                <div class="navbar-nav ms-auto mt-2 mx-3">
                    <a class="nav-link text-light" href="/profile">
                        <h5>
                            <i class="fa-solid fa-user"></i>
                            {{ auth()->user()->username }} 
                        </h5>
                    </a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link text-light" style="background-color:transparent; border:none"
                            onclick="return confirm('Are you sure you want to logout?')">
                            <h5>
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                            </h5>
                        </button>
                    </form>
                    
                    {{-- <p></p> --}}
                </div>
                @endauth
                </div>
            </div>
        </nav>
    </header>
    <img src="../assets/images/banner1.png" class="img-fluid" alt="Responsive image">
    @yield('content')
    <footer>
            <div class="" style="background-color: #7FC5BF">
                    <a class="my-5" href="/">
                        <span><img src="../assets/images/logohopin.png" alt="" title="Your logo" style="height:60px; padding-left: 20px; padding-bottom: 5px;" /></span> 
                    </a>
            </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>