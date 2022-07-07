
@extends('layouts.mainlayout')

@section('content')


<div class="item" style="background-image: linear-gradient(#57ACB3, white)">
    <div class="container">
        <div class="row">
            <div class="card my-5 p-5" style="background-color: #81D0C9">
                <h1 class="text-center p-2 mx-3 mb-4 text-light">Laman Darurat</h1>
                <div class="d-flex justify-content-around">
                    <a class="" href="/darurat/polisi" style="width:300px; height:300px">
                        <img src="../assets/images/polisi_logo.png" style="width:300px; height:300px">
                    </a>
                    <a class="" href="/darurat/igd" style="width:300px; height:300px">
                        <img src="../assets/images/igd_logo.png" style="width:300px; height:300px">
                    </a>
                    <a class="" href="/darurat/damkar" style="width:300px; height:300px">
                        <img src="../assets/images/damkar_logo.png" style="width:300px; height:300px">
                    </a>
                </div>
            </div>
            
        </div>
    
    </div>
    </div>

@endsection