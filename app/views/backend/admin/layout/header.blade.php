
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
<a class="brand" href="{{url('/dashboard')}}"><img src="{{URL::to('Backend/img/logo1.png')}}" alt=""></a>
    <div class="container">

      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="nav-collapse collapse">
        <ul class="nav top_menu_1 pull-right">
        
       
          <li class="welcome_text"><span>Hoşgeldiniz :</span> <a href="{{url('/dashboard/me')}}">{{Auth::user()->nameusername}}</a></li>
          <li><a href="{{URL::to('/logout')}}" style="font-size:15px;"><img src="{{URL::to('Backend/img/logout.png')}}" alt="" class="top_menu_icon" />Çıkış</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
