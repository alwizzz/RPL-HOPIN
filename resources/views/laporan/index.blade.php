@extends('layouts.mainlayout')

@section('content')
<div class="item" style="background-image: linear-gradient(#57ACB3, white)">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-12 mt-5 d-flex justify-content-center">
            <a class="navbar-brand" href="/index">
                <span><img class="mx-auto" src="../assets/images/laporanicon.png" alt="" title="Your logo" style="height:175px;" /></span> 
            </a>
        </div>
        <div class="col-12 mt-3 mb-5 d-flex justify-content-center">
            {{-- <a class="btn btn-lg ml-5 text-light fw-bold" style="background-color: #B4ECE7 ;width: 200px; height: 50px;" href="#" role="button">
                BUAT LAPORAN
            </a> --}}
            <a class="btn btn-lg ml-5 text-light fw-bold" style="background-color: #57ACB3; width: 200px; height: 50px;" href="#" 
                role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                BUAT LAPORAN
            </a>
        </div>

        @foreach($laporans as $laporan)
        <div class="d-flex flex-row justify-content-center">
            <div class="col-12 card d-flex flex-row my-3 bg-light" >
                <div class="row">
                    <div class="col-4 my-auto">
                        <img class="card-img img-thumbnail" src="https://source.unsplash.com/200x150/?accident" 
                        alt="Card image cap" style="width: 325px; height: 210px">
                    </div>
                    <div class="col-8 card-body my-auto">
                        <h4 class="card-text fw-bold">{{ $laporan->title }}</h4>
                        <h5 class="card-text">{{ substr($laporan->description, 0, 80) }}</h5>
                        <p class="card-text"><i class="fa-solid fa-user"></i> MelawaX</p>
                        <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{ $laporan->location }}</p>
                        <div class="mx-auto">
                            <a class="btn text-light" style="background-color: #57ACB3" href="/laporan/{{ $laporan->id }}">Lihat Laporan</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $laporans->links() }}
    </div>
</div>
</div>
</div>

@include('partials.modal_create')

@endsection