@extends('index')

@section('content')
<div class="row" style="padding-bottom: 0px;">      
    <div class="col s12" style="padding: 0px;">
        <div class="row" style="padding-bottom: 0px;">                  
            <div class="col s12" style="padding-bottom: 0px;">
                <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">headset_mic</i>CONTACT US</div>
                <div class="card-panel">
                    <div class="row">
                        <div class="col m6">
                            <div id="profile-card" class="card">
                                <div class="card-content">
                                    <img src="{{asset('images/profil/'.$profil->gambar)}}" alt="" class="responsive-img activator card-profile-image">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="material-icons">call</i>
                                    </a>

                                    <span class="card-title activator grey-text text-darken-4">{{ucwords($profil->nama_kontak)}}</span>
                                    <p><i class="material-icons">account_circle</i> {{ucwords($profil->posisi_kontak)}}</p>
                                    <p><i class="material-icons">call</i> {{$profil->telpon}}</p>
                                    <p><i class="material-icons">email</i> {{$profil->email}}</p>
                                </div>                            
                            </div>
                        </div>  
                        <div class="col m6">
                            <h5>Social Media</h5><hr>
                             <a href="{{$profil->fb}}" class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">favorite</i>Facebook</a>
                             <a href="{{$profil->youtube}}" class="collapsible-header white-text" style="background-color: #FF5650FF; margin-top: 9px;"><i class="material-icons white-text">favorite</i>Youtube</a>
                        </div>                  
                    </div>                             
                </div>   
            </div>
        </div>
    </div>

</div>
@endsection