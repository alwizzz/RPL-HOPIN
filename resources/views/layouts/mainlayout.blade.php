<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
=======
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
>>>>>>> 64657f21404ec89a530e2261eda462b728844e07
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

    

    <title>HOPIN</title>
</head>
<body>
    <header id="site-header" class="fixed-top">
        <nav class="navbar navbar-expand-lg  stroke px-0" style="background-color: #7FC5BF">
            <a class="navbar-brand" href="/">
                <span><img src="../assets/images/logohopin.png" alt="" title="Your logo" style="height:60px; padding-left: 20px; padding-bottom: 5px;" /></span> 
            </a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse fw-bold" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item @@about__active mx-5 hover">
                        <a class="nav-link text-light" href="/registrasi"><h5>Laporan</h5></a>
                    </li>
                    <li class="nav-item @@services__active mx-5">
                        <a class="nav-link text-light" href="/transaksi"><h5> Quest</h5></a>
                    </li>
                    <li class="nav-item @@contact__active mx-5">
                        <a class="nav-link text-light" href="/mutasi"><h5>Darurat</h5></a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-1">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admindashboard">Logout<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
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