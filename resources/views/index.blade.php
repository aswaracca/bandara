<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Angkasa Pura</title>
  <link rel="shortcut icon" href="{{asset('home/assets/images/icon.ico')}}" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('home/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('home/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- Tenan -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="{{asset('home/css/flexslider.css')}}" type="text/css" media="screen" />
  <!-- Tenan -->
  <!-- Chart -->
  <link rel="stylesheet" href="{{asset('home/style.css')}}" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- background -->
<style type="text/css" media="screen">
    body:before {
        content: "";
        position: fixed;
        z-index: -1;
        /*background-size:cover;*/
        /*background-position:center top;*/
        display: block;
        background-image: url({{asset('home/assets/images/bg.jpg')}}); 
        width: 100%;
        height: 1200px;
        filter: blur(1px) ;
        -webkit-filter: blur(2px) ;
      }
</style>
<!-- animasi css -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/animasi.css')}}">
<!-- enddddd animasi -->



</head>
<body style="overflow-x: hidden;">
<!--   <div id="load" class="fokus">
<div class="preloder">
<div class="loading">  
<div id="overlay" class="socket">
      <div class="gel center-gel">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c1 r1">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c2 r1">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c3 r1">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c4 r1">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c5 r1">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c6 r1">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      
      <div class="gel c7 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      
      <div class="gel c8 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c9 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c10 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c11 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c12 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c13 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c14 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c15 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c16 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c17 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c18 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c19 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c20 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c21 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c22 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c23 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c24 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c25 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c26 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c28 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c29 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c30 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c31 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c32 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c33 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c34 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c35 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c36 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      <div class="gel c37 r3">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2"></div>
        <div class="hex-brick h3"></div>
      </div>
      
    </div>
</div>
</div>
</div> -->
  
    <div class="responsive-img initialized">
      <img src="{{asset('home/assets/images/header2.png')}}" class="responsive-img">
    </div>
  

  <div class="row" style="padding-bottom: 0px;">      
        <div class="col s9" style="padding: 0px;">
                          
                    @yield('content')
              
        </div>

        <div class="col s3" style="padding: 0px;">          
            <div class="row">
                <div class="col m12" style="padding-left: 0px;">                        
                        <div class="card-panel light-blue" style="padding-left: 3px; padding-top: 3px; padding-bottom: 3px;">
                               <div class="card-content">                                  
                                  <h5 style="margin-left: 24px; margin-right: 24px;" class="white-text">Contact Us :</h5>                                  
                                  <table class="responsive-table">
                                      <tbody>
                                          <tr>
                                              <td  style="padding: 5px;"><i class="material-icons white-text">call</i></td>
                                              <td class="white-text" style="padding: 5px;">{{$profil->telpon}}</td>
                                          </tr>

                                      </tbody>
                                      <tbody>
                                          <tr>
                                              <td  style="padding: 5  px;"><i class="material-icons white-text">email</i></td>
                                              <td class="white-text">{{$profil->email}}</td>
                                          </tr>

                                      </tbody>
                                     
                                  </table>
                                </div>                      
                        </div>
                        <div class="card-panel" style="padding: 0px; padding-top: 3px;">
                               <div class="card-content">                                  
                                  <a href="javascript:;"><h5 class="blue-text" style="margin-left: 24px; margin-right: 24px;">News & Promo</h5></a>
                                    <ul class="collection">
                                        @foreach($news as $val)
                                            <li class="collection-item avatar email-unread">
                                                <a href="{{url('news-promo/'.$val->id_berita)}}">  
                                                      <img src="{{asset('images/gambar/thumb/'.$val->gambar)}}" alt="" class="circle">
                                                      <span class="email-title">{{ucwords($val->judul)}}</span>
                                                      <p class="truncate grey-text ultra-small">{{ucfirst($val->jenis)}}</p>
                                                </a>
                                            </li>
                                        @endforeach         
                                    </ul>
                                </div>                      
                        </div>
                        
                        <div class="col s6"  style="padding-left: 0px; padding-right: 0px; ">
                            <button id="like" class="btn waves-effect blue z-depth-4" type="submit" name="action" style="width: 100%; height: 50px; z-index: 0; opacity: 0.9;">
                                <i class="material-icons large white-text">thumb_up</i>
                            </button>
                        </div>
                        <div class="col s6"  style="padding-right: 0px;">
                            <button id="unlike" class="btn waves-effect red darken-4 z-depth-4" type="submit" name="action" style="width: 100%; height: 50px; z-index: 0; opacity: 0.9;">
                                <i class="material-icons large white-text">thumb_down</i>
                            </button>
                        </div>
                    

                </div>                
            </div>
        </div>         

</div>



<!-- tombol navigasi -->
            <div class="footer" style="position: fixed; width: 100%; bottom:0px;">
                    <div class="row"> 
                    <div class="col m12">
                        <span class="white-text" style="opacity: 0.9; padding: 0px;">
                          <marquee bgcolor="#113ca1">
                            <H6>WELCOME TO SULTAN HASANUDDIN AIRPORT</H6>
                          </marquee>
                        </span>
                    </div>            
                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Way Finding', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('tenan')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; opacity: 0.9;">  
                                    <i class="material-icons small white-text">search</i>
                                    <p class="promo-caption white-text"><b>WAY FINDING</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Flight Shedule', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('jadwal')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; opacity: 0.9;">   
                                    <i class="material-icons small white-text">flight_takeoff</i>
                                    <p class="promo-caption white-text"><b>FLIGHT SCHEDULE</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('survey')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; opacity: 0.9;">   
                                    <i class="material-icons small white-text">view_list</i>
                                    <p class="promo-caption white-text"><b>SURVEY</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('news-promo')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; opacity: 0.9;">   
                                    <i class="material-icons small white-text">style</i>
                                    <p class="promo-caption white-text"><b>PROMO & EVENT</b></p>                
                            </div>
                            </a>
                        </div>
                        
                                                        
                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Airport Profile', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('profile')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; opacity: 0.9;">                         
                                    <i class="material-icons small white-text">business</i>
                                    <p class="promo-caption white-text"><b>AIRPORT PROFILE</b></p>                
                            </div>
                          </a>
                        </div>

                        <div class="col s2 waves-effect waves-light"onclick="Materialize.toast('Welcome', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="contact" title="">
                            <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; opacity: 0.9;">                          
                                    <i class="material-icons small white-text">contact_phone</i>
                                    <p class="promo-caption white-text"><b>CONTACT US</b></p>                                            
                            </div>
                          </a>
                        </div>
                   </div>                     
            </div>

<!-- tombol navigasi end -->

<!-- footer -->


 <!-- preloading -->
      <script type="text/javascript" src="{{asset('home/js/putar.js')}}" ></script>

    <!-- preloading END -->

   <!-- like button JS -->
    <script type="text/javascript">
        var fewSeconds = 10;
        $('#like').click(function(){
            // Ajax request
            var btn = $(this);
            btn.prop('disabled', true);

            $.get("{{url('suka')}}", function(data, status){
                console.log("berhasil");
            });

            setTimeout(function(){
                btn.prop('disabled', false);
            }, fewSeconds*1000);
        });
        var fewSeconds = 10;
        $('#unlike').click(function(){
            // Ajax request
            var btn = $(this);
            btn.prop('disabled', true);
            $.get("{{url('tidak-suka')}}", function(data, status){
                console.log("berhasil");
            });
            setTimeout(function(){
                btn.prop('disabled', false);
            }, fewSeconds*1000);
        });
    </script>


   
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('home/js/materialize.js')}}"></script>
  <script src="{{asset('home/js/init.js')}}"></script>
  <script src="{{asset('home/js/hammer.min.js')}}"></script>

  <!-- tenan -->
     <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="{{asset('home/js/libs/jquery-1.7.min.js')}}">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="{{asset('home/js/jquery.flexslider.js')}}"></script>

  <script type="text/javascript">
    $(function(){
      // SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 80,
        itemMargin: 25,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  
  <!-- video play -->
  <script type="text/javascript">
    var vid1 = document.getElementById("video1");
    var vid2 = document.getElementById("video2");
    var vid3 = document.getElementById("video3");
    var vid4 = document.getElementById("video4");
    
    function enableAutoplay() { 
    vid1.autoplay = true;
    vid1.load();
    vid2.autoplay = true;
    vid2.load();
  }
  </script>
<!-- video play END -->
    <!-- tenan -->

  </body>
</html>
