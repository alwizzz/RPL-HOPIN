@extends('layouts.mainlayout')

@section('content')

        <div class="item" style="background-image: linear-gradient(#57ACB3, white)">
            <li>
                <div class="container">
                    <div class="row my-5 align-items-center">
                        <div class="col-5">   
                            <h1 class="text-light fw-bold" style="font-size: 65px">HOPIN'</h1>
                            <h5 class="text-ternary  fw-bold" style="font-size: 30px;">Help Other People in Needs</h5>
                            <p style="font-size: 20px">Hopins membantu Anda menyebarkan manfaat kepada orang lain di sekitar Anda</p>
                        </div> 
                        <div class="col-4 offset-2">
                            <a class="btn btn-lg " style="background-color: #112B3C ;width: 200px; height: 75px;" href="#" role="button"><h4 class="text-light">Masuk</h4> </a>
                            <a class="btn btn-lg " style="background-color: #112B3C ;width: 200px; height: 75px;" href="#" role="button"><h4 class="text-light">Daftar</h4> </a>
                        </div> 
                    </div>
                </div>
            </li>
        </div>

        {{-- TOP 3 LAPORAN --}}
        <div class="d-flex justify-content-center align-items-center my-5" style="width:100%; height:300px; background-color:antiquewhite">
            <div class="laporan-header mx-3">
                Laporan Logo
                blablabla
            </div>
            <div class="laporan-wrapper d-flex">
                @foreach($laporans as $laporan)
                    <div class="card mx-3" style="width: 200px; height:275px">
                        <img class="card-img-top" src="https://source.unsplash.com/200x150/?accident" style="height:100px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $laporan->title }}</h5>
                            <p class="card-text"><i class="fa-solid fa-location-dot mx-1"></i>{{ $laporan->location }}</p>
                        </div>
                        <div class="d-flex justify-content-center" style="margin-bottom: 20px">
                            <a href="/laporan/{{ $laporan->id }}" class="btn btn-primary" style="width:150px">Lihat Laporan</a>

                        </div>
                    </div>
                @endforeach
                  
            </div>
        </div>

        {{-- TOP 3 QUEST --}}
        <div class="d-flex justify-content-center align-items-center my-5" style="width:100%; height:300px; background-color:antiquewhite">
            <div class="laporan-header mx-3">
                Quest Logo
                blablabla
            </div>
            <div class="laporan-wrapper d-flex">
                @foreach($quests as $quest)
                    <div class="card mx-3" style="width: 200px; height:275px">
                        <img class="card-img-top" src="https://source.unsplash.com/200x150/?accident" style="height:100px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $quest->title }}</h5>
                            <p class="card-text"><i class="fa-solid fa-location-dot mx-1"></i>{{ $quest->location }}</p>
                        </div>
                        <div class="d-flex justify-content-center" style="margin-bottom: 20px">
                            <a href="/quest/{{ $quest->id }}" class="btn btn-primary" style="width:150px">Lihat Quest</a>

                        </div>
                    </div>
                @endforeach
                  
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@endsection