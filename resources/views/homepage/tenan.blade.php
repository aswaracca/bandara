@extends('index',['news' =>$news,'profil'=>$profil])

@section('content')
<!-- tenan -->
<div class="row" style="padding-bottom: 0px;">          
          <div class="col s12" style="padding-bottom: 0px;">
              <div class="card-panel grey lighten-5 z-depth-1" style="padding: 20px; height: 537px;">
    <!-- tenan -->
     <div id="main" role="main">
        <section class="slider">
          <div id="slider"> <!-- class="flexslider" -->
            <ul class="slides center">
            <?php $i=1;?>
            @foreach($data as $val)                              
              <li>
                <video id="video{{$i++}}" width="100%" height="400px" loop muted style="padding: 0px;">
                    <source src="{{asset('images/map/'.$val->map)}}" type="video/mp4"><
                </video>
              </li>  
              @endforeach                           
            </ul>
          </div>

          <div class="container">
          <div id="carousel" class="flexslider">
            <ul class="slides">                              
            @foreach($data as $val)                              
              <li>
              <button onclick="enableAutoplay()" type="button" class="transparent">                        
                  <img src="{{asset('images/logo/thumb/'.$val->logo)}}" />   
              </button>                           
              </li> 
             @endforeach          
            </ul>
          </div>
        </div>
        </section>
      </div>
      </div>
      </div>
      </div>
    <!-- tennan -->
@endsection