<div id="container">
<div class="sidebar">
  <div class="antiScroll">
    <div class="antiscroll-inner">
      <div class="antiscroll-content">
        <div class="sidebar_inner">
          <div class="login_info">
            
            <div class="user_info_data"> <img src="{{URL::to('Backend/img/1017.png')}}" class="user_image" alt=""/>
             <span> <h5>{{Auth::user()->nameusername}}</h5></span>
            </div>
             </div>
          
          <div id="side_accordion" class="accordion">
            <div class="accordion-group none_accrodion">
              <div class="accordion-heading"> <a href="{{URL::to('project/proje')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/dashboard.png')}}" alt=""></span>Anasayfa </a> </div>
            </div>
            
            <div class="accordion-group none_accrodion">
              <div class="accordion-heading"> <a href="{{URL::to('project/proje')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/projects.png')}}" alt=""></span>Projeler </a> </div>
            </div>
              
            <div class="accordion-group none_accrodion">
              <div class="accordion-heading"> <a href="{{URL::to('tasks/list')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/task.png')}}" alt=""></span>Görevler </a> </div>
            </div>
            <div class="accordion-group none_accrodion">
              <div class="accordion-heading"> <a href="{{URL::to('calendar/calendar')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/calendar.png')}}" alt=""></span>Takvim </a> </div>
            </div>
            <div class="accordion-group none_accrodion">
              <div class="accordion-heading"> <a href="{{url('/dashboard/timesheet')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/timesheet.png')}}" alt=""></span>Zaman Çizelgesi </a> </div>
            </div>
            <div class="accordion-group bdr_none1">
              <div class="accordion-heading none_accrodion"> <a href="{{url('/dashboard/mytodos')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/notes.png')}}" alt=""></span>Dosyalar </a> </div>
            </div>
          </div>
            @if(Auth::user()->yetki==1)
          <div id="side_accordion" class="accordion">
           
            <div class="accordion-group bdr_none1">
              <div class="accordion-heading none_accrodion"> <a href="{{url('/dashboard/admin')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/users.png')}}" alt=""></span>Admin </a> </div>
            </div>
              
            <div class="accordion-group bdr_none1">
              <div class="accordion-heading none_accrodion"> <a href=""> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/adminuser.png')}}" alt=""></span>Kullanıcılar </a> </div>
            </div> 
             <ul>
              
            <div class="accordion-group bdr_none1">
              <div class="accordion-heading none_accrodion"> <a href="{{URL::to('kullanici/kullaniciekle')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/adminuser.png')}}" alt=""></span>Kullanıcı Ekle</a> </div>
            </div> 
            <div class="accordion-group bdr_none1">
              <div class="accordion-heading none_accrodion"> <a href="{{URL::to('kullanici/kullanicilistele')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/adminuser.png')}}" alt=""></span>Kullanıcı Listele</a> </div>
            </div>
              </ul> 
            
              
            <div class="accordion-group bdr_none1">
              <div class="accordion-heading none_accrodion"> <a href="{{url('/dashboard/roles')}}"> <span class="accrod_icon"><img src="{{URL::to('Backend/img/dashboard/roles.png')}}" alt=""></span>Roller </a> </div>
            </div>
          </div>
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
</div>
