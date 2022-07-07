
@extends('layouts.mainlayout')

@section('content')
<div class="item" style="background-image: linear-gradient(#57ACB3, white)">
<div class="container">
    <div class="row">
        <div class="card my-5 p-5" style="background-color: #B4ECE7">
            <h3 class="text-center p-2 mx-3 text-light" style="background-color: #81D0C9">{{ $title }}</h3>
            <div class="card-body d-flex flex-row">
                <img src="../assets/images/damkar_image.png" class="img-thumbnail" alt="quest-img" style="width:400px; height:300px">
                <div class="">
                    <h5 class="card-text mx-3">{{ $desc }}</h5>
                    <h5 class="card-text mx-3"><i class="fa-solid fa-location-dot"></i> {{ $location }}</h5>
                    <h5 class="card-text mx-3"><i class="fa-solid fa-clock"></i> {{ $buka_jam }}</h5>
                    <h5 class="card-text mx-3"><i class="fa-solid fa-phone"></i> {{ $telepon }}</h5>
                </div>
            </div>

            <hr>
            <div class="col-12 mt-3 d-flex justify-content-center">
                <a class="btn btn-lg ml-5 fw-bold" style="background-color: white; width: 100%; height: 50px;" href="#" role="button">
                    <p style="color: #95D1CC">
                        PANGGIL SEKARANG
                    </p> 
                </a>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-center">
                <a class="btn btn-lg ml-5 fw-bold" style="background-color: rgb(21, 115, 35); width: 100%; height: 50px;" href="#" role="button">
                    <p style="color: #95D1CC">
                        BUKA MAPS
                    </p> 
                </a>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-center">
                <a class="btn btn-lg ml-5 fw-bold" style="background-color: rgb(37, 73, 53); width: 100%; height: 50px;" href="/darurat" role="button">
                    <p style="color: #95D1CC">
                        KEMBALI KE BERANDA
                    </p> 
                </a>
            </div>
        </div>
        
    </div>

</div>
</div>

@endsection