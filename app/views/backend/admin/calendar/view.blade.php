@extends('backend.admin.layout.master')

@section('content')
<div id="container">
  <div class="main_content">
       <div class="row-fluid" >
     <div id="main" class="clearfix">
         
         <div class="span12 project_detail">
                        	<h2><a href="{{URL::to('panel')}}">Dashboard</a> / Calendar</h2>
                                  <a data-toggle="modal" href="{{URL::to('calendar/createdbyme')}}" class="add_project pull-right"> Events Created by Me</a>
          <a data-toggle="modal" href="#myModal" class="add_project add-last"> + Add Event</a>
                                <div class="project_box">
                            <div id="main-content">
                            	<div class="row-fluid">                                    
                                	<div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">
                                                <i class="icol-calendar-1"></i>
                                                Calendar
                                            </span>
                                        </div>
                                        <div class="widget-content no-padding no-border">
                                            <div id="demo-calendar-01"></div>
                                        </div>
                                    </div>
                                </div>
                            	
                            </div>
              </div>
       </div>

         
          </div>
                                
      </div>
  </div>

@stop

   @section('css')

<link rel="stylesheet" href="{{URL::to('Backend/plugins/fullcalendar/fullcalendar.css')}}" media="screen">
<link rel="stylesheet" href="{{URL::to('Backend/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">
   
   
   
@stop
  @section('js')
  
   <!-- Full Calendar -->
   <script src="{{URL::to('Backend/assets/js/fullcalendar.min.js')}}"></script>
   <script src="{{URL::to('Backend/assets/js/gcal.js')}}"></script>
   <!-- Demo Scripts -->
   <script src="{{URL::to('Backend/assets/js/demo/calendar.js')}}"></script>
   <script src="{{URL::to('Backend/plugins/fullcalendar/lang-all.js')}}"></script>
 
  <script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            lang: 'tr'
        });

    });

</script>
  
@stop
 
