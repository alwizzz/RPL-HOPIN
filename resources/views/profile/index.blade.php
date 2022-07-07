@extends('layouts.mainlayout')

@section('content')
<div class="profile-wrapper d-flex justify-content-center">
    <div class="p-5 m-5 d-flex flex-column justify-content-center" style="width:90%; height: auto; background-color:#42A1A5">
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

        <div class="d-flex justify-content-center mt-5" style="width:100%; margin-bottom: 15px; background-color:aqua" >
            <div class="profile-name d-flex flex-column align-items-center">
                <h3>{{ $user->nama_lengkap }}</h3>
                <h5>{{ $user->username }}</h5>
            </div>
        </div>
        
        <div class="d-flex justify-content-center" style="width:100%; margin-bottom: 15px; background-color:aqua" >
            <div class="profile-level d-flex flex-column align-items-center">
                <label>Level</label>
                <div class="profile-level-display p-3" style="background-color: aquamarine">
                    {{ $user->level }}
                </div>
            </div>
            
            <div class="profile-xp d-flex flex-column align-items-center">
                <label>XP</label>
                <div class="profile-xp-display p-3" style="background-color: aquamarine">
                    {{ $user->total_exp }}
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-center" style="width:100%; margin-bottom: 15px; background-color:aqua" >
            <div class="profile-info p-4 d-flex flex-column" style="width:500px; height: auto; background-color:aquamarine">
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

@endsection