@extends('layouts.mainlayout')

@section('content')
<div class="item" style="background-image: linear-gradient( white, #57ACB3)">

<div class="profile-wrapper d-flex justify-content-center">
    <div class="p-5 m-5 d-flex flex-column justify-content-center rounded-4" style="width:90%; height: auto; background-color:#42A1A5">
        <div class="row">
            <div class="col-3 d-flex justify-content-between">
                <div class="profile-rank-image" >   
                    <img src="../assets/images/rank_logo.webp" style="width:150px; height:150px" >
                </div>
            </div>
            <div class="col-5 offset-1  d-flex mx-auto" style="padding-left:50px;">
                <div class="profile-circle-image " >
                    <img src="../assets/images/default_profile_image.jpg" style="width:150px; height:150px" >
                </div>
            </div>
            
        </div>
        
        <div class="col-4 offset-4 d-flex justify-content-center mt-5 rounded-4 border-white" style="background-color:#B4ECE7; border-style: solid;"  >
            <div class="profile-name d-flex flex-column align-items-center mx-1 my-2 " style="color: #112B3C;">
                <h2>{{ $user->nama_lengkap }}</h2>
                <h5> @ {{ $user->username }}</h5>
            </div>
        </div>
        
        <div class="col-6 offset-3 d-flex justify-content-center my-3" >
            
            <div class=" col-1 profile-level  align-items-center mx-3 fw-bold text-center" >
                <label style="color: white">Level</label>
                <div class="profile-level-display p-3 rounded-3 border-white" style="background-color:#B4ECE7; border-style: solid;" >
                    {{ $user->level }}
                </div>
            </div>

            <div class=" col-6 profile-xp   align-items-center fw-bold">
                <label style="color: white">XP</label>
                <div class="col-11 progress border-white" style="height: 60px; border-style: solid; background-color:#B4ECE7;"> 
                    <div class="progress-bar bg-success progress-height bg-green border " role="progressbar" style=" width:  {{ ($user->total_exp % 1000)/10 }}%" aria-valuenow=" {{ $user->total_exp % 1000}}" aria-valuemin="0" aria-valuemax="1000"></div>
                </div>
            </div>
        </div>
        
        <div class="col-6 offset-4 justify-content-center" style="" >
            
            <div class="profile-info p-4 d-flex flex-column rounded-3 border-white" style="width:500px; height: auto; background-color:#B4ECE7; border-style: solid;">
                <div class="profile-body d-flex  align-items-center">
                    <label for="">Email</label>
                    <h4>{{ $user->email }}</h4>
                </div>
                
                <div class="profile-body d-flex  align-items-center">
                    <label for="">Phone</label>
                    <h4>{{ $user->no_hp }}</h4>
                </div>
                
                <div class="profile-body d-flex  align-items-center">
                    <label for="">Location</label>
                    <h4>{{ $user->location }}</h4>
                </div>
            </div>
        </div>

    </div>    
    
</div>
</div>
@endsection