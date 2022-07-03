
@extends('layouts.mainlayout')

@section('content')
<div class="item" style="background-image: linear-gradient(#57ACB3, white)">
<div class="container">
    <div class="row">
        <div class="card my-5 p-5" style="background-color: #B4ECE7">
            <h3 class="text-center p-2 mx-3 text-light" style="background-color: #81D0C9">{{ $laporan->title }}</h3>
            <div class="card-body d-flex flex-row">
                <div class="col-4">
                    <div class="row">
                        <div class="col-12 my-2">
                            <img src="https://source.unsplash.com/400x300/?accident" class="img-thumbnail" 
                            alt="quest-img" style="width:400px; height:300px">
                        </div>
                        <div class="col-12">
                            <img src="https://source.unsplash.com/400x300/?accident" class="img-thumbnail" 
                            alt="quest-img" style="width:400px; height:300px">
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="card-text mx-3">Desciption: {{ $laporan->description }}</p>
                    <div class="align-items-right">
                        <h5 class="card-text mx-3"><i class="fa-solid fa-user"></i> MelawaX</h5>
                        <h5 class="card-text mx-3"><i class="fa-solid fa-location-dot"></i> {{ $laporan->location }}</h5>
                    </div>
                    </div>
            </div>
            <hr>
            <div class="col-12 mt-3 mb-5 d-flex justify-content-center">
                <a class="btn btn-lg ml-5 fw-bold" style="background-color: white; width: 100%; height: 50px;" href="#" role="button">
                    <p style="color: #95D1CC">
                        BUAT LAPORAN
                    </p> 
                </a>
            </div>
        </div>
    </div>

</div>
</div>

@endsection