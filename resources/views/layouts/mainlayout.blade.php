<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header id="site-header" class="fixed-top">
        <nav class="navbar navbar-expand-lg  stroke px-0 navbg">
            <a class="navbar-brand" href="/">
                <span><img src="assets/images/logohopin.png" alt="" title="Your logo" style="height:35px; padding-right: 5px; padding-bottom: 8px;" /></span> 
            </a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="/registrasi">Laporan</a>
                    </li>
                    <li class="nav-item @@services__active">
                        <a class="nav-link" href="/transaksi">Quest</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="/mutasi">Darurat</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-1">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admindashboard">Logout<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
            @yield('content')
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>