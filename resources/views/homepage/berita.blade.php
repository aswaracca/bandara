@extends('index',['news' =>$news,'profil'=>$profil])

@section('content')
<div class="row">
  <div class="col s12">
      <div class="card-panel grey lighten-5 z-depth-1" style="width: 100%; height: 537px;">
        <div class="row valign-wrapper">
          <div class="row">
            <div class="col l6">
              <img src="{{asset('images/gambar/'.$data->gambar)}}" class="responsive-img" alt="">
            </div>
            <div class="col l6">
               <div class="row">
              <div class="col s12">
                <div class="">
                  <h5 class="blue-text">{{ucwords($data->judul)}}</h5><hr>
                  <span style="font-size: 17px;"><?=$data->teks?></span>
                </div>
              </div>
            </div>
            </div>
          </div>                  
        </div>
      </div>
  </div>
</div>
@endsection