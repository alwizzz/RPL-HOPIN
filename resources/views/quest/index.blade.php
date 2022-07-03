@extends('layouts.mainlayout')

@section('content')
    @foreach($quests as $quest)
        <div class="d-flex flex-row justify-content-center">
            <div class="card d-flex flex-row my-3" style="width:1000px">
                <img class="card-img img-thumbnail" src="https://source.unsplash.com/200x150/?accident" 
                    alt="Card image cap" style="width: 200px; heigth: 200px">
                <div class="card-body">
                    <h4 class="card-text">Title: {{ $quest->title }}</h4>
                    <h5 class="card-text">Excerpt: {{ substr($quest->description, 0, 80) }}</h5>
                    <p class="card-text"><i class="fa-solid fa-user"></i> MelawaX</p>
                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{ $quest->location }}</p>
                    <a class="btn btn-primary" href="#">Terima Quest</a>
                </div>
            </div>
            <div class="card d-flex flex-row my-3 mx-1">
                <div class="card-body">
                    <h4 class="card-text">Reward</h4>
                    <h5 class="card-text">Rp20.000</h5>
                    {{-- <p class="card-text"><i class="fa-solid fa-user"></i> MelawaX</p>
                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> Solo</p>
                    <a class="btn btn-primary" href="#">Terima Quest</a> --}}
                </div>
            </div>
        </div>
        
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $quests->links() }}
    </div>
@endsection