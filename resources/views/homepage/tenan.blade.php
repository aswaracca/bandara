<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Angkasa Pura</title>
  <link rel="shortcut icon" href="assets/images/icon.ico" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('home/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('home/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  

<!-- background -->
<style type="text/css" media="screen">
    body:before {
        content: "";
        position: fixed;
        z-index: -1;
        /*background-size:cover;*/
        /*background-position:center top;*/
        display: block;
        /*background-image: url(assets/images/bg.jpg); */
        background-color: #ffffff;
        width: 100%;
        height: 1200px;
        filter: blur(1px) ;
        -webkit-filter: blur(2px) ;
      }
</style>
<!-- animasi css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/animasi.css"> -->
<!-- enddddd animasi -->

<!-- scroll recent -->
    <style type="text/css">
        .hidden-scrollbar {
          color:#26a69a;  
          overflow:hidden;
          text-align:justify;    
        }

        .hidden-scrollbar .inner {
          height:150px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
        }
        .hidden-scrollbar .inner-search {
          height:310px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
        }

    </style>
<!-- scroll recent -->
<!-- autocomplete -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css'> -->
<!-- autocomplete End -->
<link rel="stylesheet" type="text/css" href="{{asset('home/css/search.css')}}">

</head>
<body style="overflow-x: hidden;">
<!-- slider -->
<script src="{{asset('home/js/jssor.slider-26.7.0.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 0,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 15,
                $SpacingX: 5,
                $SpacingY: 5,
                $Align: 390
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1418;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color: rgb(255, 255, 255);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
<!-- slider END -->

  
    <div class="responsive-img initialized">
      <img src="{{asset('home/assets/images/header2.png')}}" class="responsive-img">
    </div>
  

          <div class="row" style="padding-bottom: 0px;">      
              <div class="col s9" style="padding: 0px;">
                  <div class="row" style="padding-bottom: 0px;">                  
                      <div class="col s12" style="padding-bottom: 0px;">
                        <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">map</i>MAPS</div>
                               <!-- slider -->
                                @foreach($data as $video)
                            <video  autoplay loop muted width="100%" height="500">
                                <source src="{{asset('images/map/20171224042758.mp4')}}" type="video/mp4">
                            </video>
                               @endforeach
                      </div>
                  </div>
            </div>
        

        <!-- slider -->
        <script type="text/javascript">jssor_1_slider_init();</script>
        <!-- #endregion Jssor Slider End -->

    <script type="text/javascript">
      // looping sesuai id dari html
    <?php foreach($data as $video){ 
      echo "var vid".$video->id_tenan."= document.getElementById('video".$video->id_tenan."');";
     } ?>
    
     function viewDataPopuler(idtenan){
          $.get("{{url('tenan/populer')}}/"+idtenan,function(data, status){
              console.log(data);
          });
     }

    function enableAutoplay(identitas) {
    <?php foreach($data as $video){ 
       //looping by id  
      echo "if(identitas == ".$video->id_tenan."){";
      echo "vid".$video->id_tenan.".autoplay = true;";
      echo "vid".$video->id_tenan.".load();";
      echo "viewDataPopuler(".$video->id_tenan.");";

      echo "}";
      // batas looping
      }?>
    }

  </script>
  <!-- slider end -->

    <div class="col s3 ">          
            <div class="row">
                <div class="row">
                <div class="col m12"> 
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <div class="collapsible-header white-text" style="background-color: #16A2E7FF;"><i class="material-icons white-text">search</i>Search</div>
                                  <div class="collapsible-body">
                                       <div class="card-content">                                                                                                              
                                            <ul class="collection">                                                                                                 
                                                <li class="collection-item" style="border: 5px;"> 
                                                      <a class='dropdown-button btn' href='#' data-activates='dropdown1' style="width: 101%; background-color: #16A2E7FF;">Select Category</a> <hr> <!-- Dropdown Structure -->
                                                          <ul id='dropdown1' class='dropdown-content'>
                                                            <li><a href="{{url('tenan/all')}}"><i class="material-icons">home</i>Semua Kategori</a></li>
                                                            <li><a href="{{url('tenan/rnb')}}"><i class="material-icons">view_module</i>F & B</a></li>
                                                            <li><a href="{{url('tenan/retails')}}"><i class="material-icons">airplay</i>Retails</a></li>
                                                            <li><a href="{{url('tenan/services')}}"><i class="material-icons">apps</i>Services</a></li>
                                                            <li><a href="{{url('tenan/supports')}}"><i class="material-icons">beenhere</i>Supports</a></li>
                                                          </ul>                                                   
                                                     <input type="text" id="myInput" onkeyup="myFunction()" placeholder="  Type Text..." class="white" style="font-size: 24px; background-color: "> 
                                                </li>
                                                    
                                                <div class='hidden-scrollbar'>
                                                    <div class='inner-search'>
                                                        <ul id="myUL" class="collection" style="margin-top: 0px; margin-bottom: 0px;">
                                                          @foreach($data as $video)  
                                                            <li onclick="enableAutoplay({{$video->id_tenan}})"><a href="javascript:;">{{$video->nama}}</a></li>
                                                          @endforeach
                                                        </ul>                                                                                   
                                                    </div>
                                                </div>
                                                                                          
                                            </ul>
                                        </div>                      
                                  </div>
                            </li>
                        </ul>

                 <script>
                function myFunction() {
                    var input, filter, ul, li, a, img;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName("li");
                    for (i = 0; i < li.length; i++) {
                        a = li[i].getElementsByTagName("a")[0];
                        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "";
                        } else {
                            li[i].style.display = "none";

                        }
                    }
                }
                </script>                      


                        <div class="" style="padding: 0px; padding-top: 0px;">
                               <div class="card-content">                                                                    
                                    <ul class="collection">
                                        <li class="collection-item" style="background-color: #16a2e7;">
                                            <a href="javascript:;"><h6 class="white-text" cstyle="margin-left: 24px; margin-right: 24px;"><b>POPULAR</b></h6></a>
                                        </li>
                                            
                                        <div class='hidden-scrollbar'>
                                            <div class='inner'>
                                            @foreach($populer as $pop)
                                            <li class="collection-item dismissable" onclick="enableAutoplay({{$pop->id_tenan}})">
                                                <div><a href="javascript:;">{{ucwords($pop->nama)}}</a><a href="javascript:;" class="secondary-content">
                                                    <i class="material-icons">grade</i></a>
                                                </div>
                                            </li>
                                            @endforeach
                                            
                                            </div>
                                        </div>
                                                                                  
                                    </ul>
                                </div>                      
                        </div>

                </div>                
            </div>
        </div>         
</div>

  <!-- tombol navigasi -->
            <div class="footer" style="position: fixed; width: 100%; bottom:0px;">
                    <div class="row"> 
                    <div class="col m12">
                        <span class="white-text" style="padding: 0px;">
                          <marquee bgcolor="#0D47A1FF">
                            <H5>WELCOME TO SULTAN HASANUDDIN INTERNATIONAL AIRPORT MAKASSAR</H5>
                          </marquee>
                        </span>
                    </div>            
                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Way Finding', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('tenan/all')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">  
                                    <i class="material-icons small white-text">search</i>
                                    <p class="promo-caption white-text"><b>WAY FINDING</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Flight Shedule', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('jadwal')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                <i class="material-icons small white-text">flight_takeoff</i>
                                <p class="promo-caption white-text"><b>FLIGHT SCHEDULE</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('survey')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                    <i class="material-icons small white-text">view_list</i>
                                    <p class="promo-caption white-text"><b>SURVEY</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('promo-event')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                <i class="material-icons small white-text">style</i>
                                <p class="promo-caption white-text"><b>PROMO & EVENT</b></p>                
                            </div>
                            </a>
                        </div>
                        
                                                        
                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Airport Profile', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('profil')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">
                              <i class="material-icons small white-text">business</i>
                              <p class="promo-caption white-text"><b>AIRPORT PROFILE</b></p>                
                            </div>
                          </a>
                        </div>

                        <div class="col s2 waves-effect waves-light"onclick="Materialize.toast('Welcome', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('contact')}}" title="">
                            <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">                          
                                    <i class="material-icons small white-text">contact_phone</i>
                                    <p class="promo-caption white-text"><b>CONTACT US</b></p>                                            
                            </div>
                          </a>
                        </div>
                   </div>                     
            </div>

<!-- tombol navigasi end -->

<!-- Autocomplete -->
<script src="{{asset('home/js/vpqzwe.js')}}"></script>
<script  src="{{asset('home/js/index.js')}}"></script>
<!-- Autocomplete end -->
<!-- preloading -->
<script type="text/javascript" src="{{asset('home/js/putar.js')}}" ></script>

    <!-- preloading END -->
  <!--  Scripts-->
<!-- <script src="{{asset('home/https://code.jquery.com/jquery-2.1.1.min.js')}}"></script> -->
<script src="{{asset('home/js/materialize.js')}}"></script>
<script src="{{asset('home/js/init.js')}}"></script>
<script src="{{asset('home/js/hammer.min.js')}}"></script>

  <!-- tenan -->
     <!-- jQuery -->
  <!-- <script src="{{asset('home/http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js')}}"></script> -->
  <script>window.jQuery || document.write('<script src="{{asset('home/js/libs/jquery-1.7.min.js')}}">\x3C/script>')</script>


  </body>
</html>
