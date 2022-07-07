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
                        @auth
                            <div class="col-4 offset-2">
                                <a class="btn btn-lg " style="background-color: #112B3C ;width: 200px; height: 75px;" href="/laporan" 
                                    role="button"><h5 class="text-light">Beranda Laporan</h5> </a>
                                <a class="btn btn-lg " style="background-color: #112B3C ;width: 200px; height: 75px;" href="/quest" 
                                    role="button"><h5 class="text-light">Beranda Quest</h5> </a>
                            </div> 
                        @else
                            <div class="col-4 offset-2">
                                <a class="btn btn-lg " style="background-color: #112B3C ;width: 200px; height: 75px;" href="/login" 
                                    role="button"><h5 class="text-light">Masuk</h5> </a>
                                <a class="btn btn-lg " style="background-color: #112B3C ;width: 200px; height: 75px;" href="/register" 
                                    role="button"><h5 class="text-light">Daftar</h5> </a>
                            </div> 
                        @endauth

                    </div>
                </div>
            </li>
        </div>

        {{-- TOP 3 LAPORAN --}}
        <div class="d-flex justify-content-center align-items-center my-5" style="width:100%; height:300px; background-color: #57ACB3">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="laporan-header mx-3 justify-content-center my-auto">
                            <a class=" d-flex mt-5 " style="padding-left: 50px;" href="/index">
                                <span><img class="ml-5" src="../assets/images/laporanicon.png" alt="" title="Your logo" style="height:100px;" /></span> 
                            </a>
                            <p class="text-light text-center fw-bold">Cari tahu laporan di sekitar Anda</p>
                            <a href="/laporan" ><p class="text-center text-light">Lihat Semua</p></a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="laporan-wrapper d-flex">
                            @foreach($laporans as $laporan)
                                <div class="card mx-4" style="width: 200px; height:275px">
                                    <img class="card-img-top" src="https://source.unsplash.com/200x150/?accident" style="height:100px">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">{{ $laporan->title }}</h6>
                                        <p class="card-text"><i class="fa-solid fa-location-dot mx-1"></i>{{ $laporan->location }}</p>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 20px">
                                        <a href="/laporan/{{ $laporan->id }}" class="btn text-light fw-bold" style="background-color: #57ACB3; height: 40px;"  >Lihat Laporan</a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- TOP 3 QUEST --}}
        <div class="d-flex justify-content-center align-items-center my-5" style="width:100%; height:300px; background-color: #57ACB3">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="laporan-header mx-3 justify-content-center my-auto">
                            <a class="d-flex mt-5" style="padding-left: 70px;"  href="/index">
                                <span><img class="mx-auto" src="../assets/images/questicon.png" alt="" title="Your logo" style="height:100px;" /></span> 
                            </a>

                            <p class="text-light text-center fw-bold">Cari tahu Quest di sekitar Anda</p>
                            <a href="/quest" ><p class="text-center text-light">Lihat Semua</p></a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="laporan-wrapper d-flex">
                            @foreach($quests as $quest)
                                <div class="card mx-4" style="width: 200px; height:275px">
                                    <img class="card-img-top" src="https://source.unsplash.com/200x150/?accident" style="height:100px">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">{{ $quest->title }}</h6>
                                        <p class="card-text"><i class="fa-solid fa-location-dot mx-1"></i>{{ $quest->location }}</p>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 20px">
                                        <a href="/quest/{{ $quest->id }}" class="btn text-light fw-bold" style="background-color: #57ACB3; height: 40px;"  >Lihat quest</a>
            
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@endsection