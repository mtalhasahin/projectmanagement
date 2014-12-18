@extends('backend.admin.layout.master')

@section('content')
<div id="container">
  <div class="main_content" id = "Grid">
    <div class="row-fluid">
      <div class="span12 project_detail">
        <h2><a href="{{URL::to('panel')}}">Anasayfa</a> / Görevler</h2>

          
          <div class="add_project_main">
            
              <a href="{{URL::to('tasks/add')}}" class="add_project add-last filter pull-right"> + Görev Ekle</a>
            </div>
            <!-- Task Listing -->
            
            <div class="row-fluid task_section">
            <div class="container col-md-12 col-md-offset">
                  <ul class="list-group">
                <!-- Task Box -->
                 @foreach($tasks as $task)
                 <li class="list-group-item {{$task->completed ? 'completed' : ''}}">
                     {{gravatar($task->user->email,$task->user->nameusername)}}
                     {{link_to_task($task)}}
                     
                     {{Form::model($task,['id'=>'completed','method'=>'PATCH','route'=>['tasks.update',$task->id]])}}
                     
                     {{Form::checkbox('completed')}}
                     {{Form::submit('Güncelle')}}
                     
                     
                     {{Form::close()}}
                 
                 </li>
                 @endforeach
                  </ul>
            </div>
             
                
                
                
              </div>
            </div>
          </div>
  </div>
</div>


@stop
@section('css')
{{HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}
@stop
@section('js')
<script>
$(document).ready( function() {
  var url = window.location.href;
var tempurl = url.split('dashboard')[0];
iosOverlay({
    text: "{{Session::get('message')}}",
    duration: 5e3,
    icon: tempurl+'Backend/img/notifications/check.png'
  });

});
</script>
@stop