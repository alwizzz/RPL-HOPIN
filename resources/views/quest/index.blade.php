@extends('layouts.mainlayout')

@section('content')




<div class="item" style="background-image: linear-gradient(#57ACB3, white)">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-12 mt-5 d-flex justify-content-center">
            <a class="navbar-brand" href="/index">
                <span><img class="mx-auto" src="../assets/images/questicon.png" alt="" title="Your logo" style="height:200px;" /></span> 
            </a>
        </div>
        <div class="col-12 mt-3 mb-5 d-flex justify-content-center">
            <a class="btn btn-lg ml-5 text-light fw-bold" style="background-color: #B4ECE7 ;width: 200px; height: 50px;" href="#" role="button">
                TAMBAH QUEST
            </a>
        </div>

        @foreach($quests as $quest)
        <div class="d-flex flex-row justify-content-center">
            <div class=" col-9 card d-flex flex-row my-3 bg-light" >
                <div class="row">
                    <div class="col-4 my-auto">
                        <img class="card-img img-thumbnail" src="https://source.unsplash.com/200x150/?accident" 
                        alt="Card image cap" style="width: 325px; height: 210px">
                    </div>
                    <div class="col-6 card-body my-auto">
                        <h4 class="card-text">{{ $quest->title }}</h4>
                        <h5 class="card-text">{{ substr($quest->description, 0, 80) }}</h5>
                        <p class="card-text"><i class="fa-solid fa-user"></i> MelawaX</p>
                        <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{ $quest->location }}</p>
                        <a class="btn btn-primary" href="/quest/{{ $quest->id }}">Detail Quest</a>
                        <button type="button" class="btn btn-info" 
                            data-toggle="modal" data-target="#exampleModal">Buat {{ $jenis }}</button>
                    </div>
                </div>
            </div>
            <div class=" col-3 card d-flex flex-row my-3 mx-1 align-items-center">
                <div class="card-body text-center">
                    <h4 class="card-text">Reward</h4>
                    <h5 class="card-text">Rp20.000</h5>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $quests->links() }}
    </div>
    
</div>
</div>
</div>


@include('partials.modal_create')
@endsection