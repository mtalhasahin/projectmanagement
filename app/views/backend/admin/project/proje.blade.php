@extends('backend.admin.layout.master')
@section('content')

<div id="container">
  <div class="main_content" id = "Grid">
    <div class="row-fluid" >
      <div class="span12 project_detail">
        <h2><a href="{{url('/dashboard')}}">Dashboard</a> / Projects</h2>
        <div class="add_project_main">
          
          <a href="#" data-filter="all" class="add_project filter active pull-left" >Hepsi</a>
          <a href="#" data-filter="p_active" class="add_project activeproject filter pull-left" >Aktif</a>
          <a href="#" data-filter="compeleted" class="add_project complproject filter pull-left" >Tamamlanmış</a>
          <a href="#" data-filter="delayed" class="add_project delayedproject filter pull-left" >Gecikmiş</a>
          <a href="{{URL::to('project/add')}}" class="add_project add-last"> + Yeni Proje Ekle</a>
          
        </div>
        <div class="project_box" >
          
          <!-- active Box -->
          <div class="span4 mix p_active proj-main-box">
            <h4><span class="p-proj-title"><a href=""></a></span>
            </h4>
            <div class="row-fluid">
              <div class="span10 a_detail_main">
                <div class="row-fluid">
                  <div class="span10 status_a">Status: Active</div>
                </div>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span10 a_detail_main">
                <div class="row-fluid">
                  <div class="span6 project_manager">Start Date: <span></span></div>
                  <div class="span6 project_manager a_end_date">End Date:
                  <span></span></div>
                </div>
              </div>
            </div>
            <div class="complete_image"><input class="proj_knob" data-width="190" data-min="0" data-bgColor="#F2F2F2" data-fgColor="#ee8e11" data-thickness=".2" data-displayPrevious=true data-readOnly=true value=""></div>
            <div class="row-fluid assign_list">
              <h5>Assigned to me:</h5>
              <ul>
                <li><a href="{{url('dashboard/tasks')}}"> tasks remaining </a></li>
              </ul>
            </div>
            <div class="row-fluid assign_list">
              <h5>Overall :</h5>
              <ul>
                <li><a href=""> tasks remaining </a></li>
              </ul>
            </div>
          </div>
          
          <div class="span4 mix compeleted proj-main-box">
            <h4><span class="p-proj-title"><a href=""></a></span>
            </h4>
            <div class="row-fluid">
              <div class="span10 a_detail_main">
                <div class="row-fluid">
                  <div class="span10 status_c">Status: Completed</div>
                </div>
              </div>
            </div>
            <div class="complete_image c_image"><input class="proj_knob" data-width="190" data-min="0" data-bgColor="#F2F2F2" data-fgColor="#2a6d1a" data-thickness=".2" data-displayPrevious=true data-readOnly=true value=""></div>
            <div class="complete_task">Completed on</div>
          </div>
          
          <div class="span4 mix delayed proj-main-box">
            <h4><span class="p-proj-title"><a href=""></a></span>
            </h4>
            <div class="row-fluid">
              <div class="span10 a_detail_main">
                <div class="row-fluid">
                  <div class="span10 status_d">Status: Delayed</div>
                </div>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span10 a_detail_main">
                <div class="row-fluid">
                  <div class="span6 project_manager">Start Date: <span></span></div>
                  <div class="span6 project_manager a_end_date">End Date: <span></span></div>
                </div>
              </div>
            </div>
            <div class="complete_image"><input class="proj_knob" data-width="190" data-min="0" data-bgColor="#F2F2F2" data-fgColor="#ca0505" data-thickness=".2" data-displayPrevious=true data-readOnly=true value=""></div>
            <div class="row-fluid assign_list">
              <h5>Assigned to me:</h5>
              <ul>
                <li><a href="{{url('dashboard/tasks')}}"> tasks remaining  </a></li>
              </ul>
            </div>
            <div class="row-fluid assign_list">
              <h5>Overall :</h5>
              <ul>
                <li><a href=""> tasks remaining </a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
@if(Session::has('status') == 'success')
<script>
$(document).ready( function() {
  var url = window.location.href;
var tempurl = url.split('dashboard')[0];
iosOverlay({
    text: "{{Session::get('message')}}",
    duration: 5e3,
    icon: tempurl+'assets/images/notifications/check.png'
  });

});
</script>
{{Session::forget('status'); Session::forget('message');}}
@elseif(Session::has('status') == 'error')
<script>
$(document).ready( function() {
  var url = window.location.href;
var tempurl = url.split('dashboard')[0];
  iosOverlay({
    text: "{{Session::get('message')}}",
    duration: 5e3,
    icon: tempurl+'assets/images/notifications/cross.png'
  });
});
</script>
{{Session::forget('status'); Session::forget('message');}}
@endif
@stop
@section('js')
{{ HTML::script('Backend/assets/js/jquery/jquery.blockUI.js') }}
{{ HTML::script('Backend/assets/js/jquery/jquery.knob.js') }}
{{ HTML::script('Backend/assets/js/dashboard/taskcompleted.js') }}
{{ HTML::script('Backend/assets/js/jquery/jquery.mixitup.js') }}
<script>
$(function() {

  $('.project_box').mixitup({
    effects: ['fade']
  });

});
</script>
@stop




