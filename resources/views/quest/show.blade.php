
@extends('layouts.mainlayout')

@section('content')
<div class="container">
    <div class="card my-5 p-5">
        <h3 class="text-center p-2 mx-3" style="background-color:aquamarine">Title: {{ $quest->title }}</h3>
        <div class="card-body d-flex flex-row">
            <img src="https://source.unsplash.com/400x300/?accident" alt="quest-img" style="width:400px; height:300px">
            <div class="">
                <p class="card-text mx-3">Desciption: {{ $quest->description }}</p>
                <p class="card-text mx-3"><i class="fa-solid fa-user"></i> MelawaX</p>
                <p class="card-text mx-3"><i class="fa-solid fa-location-dot"></i> {{ $quest->location }}</p>
            </div>



        </div>
        <hr>
        <h3 class="card-text mx-3">Objective</h3>
        <p class="card-text mx-3">Excerpt: {{ substr($quest->description, 0, 80) }}</p>

        <hr>
        <h3 class="card-text mx-3">Rewards</h3>
        <p class="card-text mx-3">Reward Item: {{ $quest->reward_items }}</p>
        <p class="card-text mx-3">Reward EXP: {{ $quest->reward_exp }}</p>
    </div>

</div>

@endsection