
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
                    <img src="https://source.unsplash.com/400x300/?accident" class="img-thumbnail" 
                        alt="quest-img" style="width:400px; height:300px">
                    </div>
                </div>
                <div class="">
                    <p class="card-text mx-3">Desciption: {{ $laporan->description }}</p>
                    <h5 class="card-text mx-3"><i class="fa-solid fa-user"></i> MelawaX</h5>
                    <h5 class="card-text mx-3"><i class="fa-solid fa-location-dot"></i> {{ $laporan->location }}</h5>
                </div>
            </div>
            <hr>
            <h3 class="card-text mx-3 fw-bold">Objective</h3>
            <p class="card-text mx-3">Excerpt: {{ substr($laporan->description, 0, 80) }}</p>
    
            <hr>
            <h3 class="card-text mx-3 fw-bold">Rewards</h3>
            <p class="card-text mx-3">Reward Item: {{ $laporan->reward_items }}</p>
            <p class="card-text mx-3">Reward EXP: {{ $laporan->reward_exp }}</p>
        </div>
    </div>

</div>
</div>

@endsection