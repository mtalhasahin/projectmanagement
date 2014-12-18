@extends('backend.admin.layout.master')

@section('content')

<div id="contentwrapper">
  <div class="main_content">
    <div class="row-fluid">
      <div class="span12 project_detail">
        <h2><a href="{{url('/dashboard')}}">Dashboard</a> / <a href="{{url('/dashboard/tasks')}}">Task</a> /Görev Görüntüle </h2>
        <!-- Add New Task -->
        <div class="row-fluid view_task">
          <div class="span7 view_task_left">
            <h3>
            {{$task->title}}
            <div class="view_task_check"><input type="checkbox" id="" value={{$task['id']}} class="regular-checkbox" checked style="position:relative; left:5px;" /><label class="taskCheck" for={{$task['id']}}></label></div>
            <span class="task_link_select"></span>
          
            <div class="view_task_check"><input type="checkbox" id="" value={{$task['id']}} class="regular-checkbox" style="position:relative; left:5px;" /><label class="taskCheck" for={{$task['id']}}></label></div>
            <span></span>
        
            <div class="add-icon-main">
              <a class="p-icon-1" title="Edit Task" href=""><img alt="" src="{{URL::to('Backend/img/dashboard/p-edit.png')}}"></a>
              <a class="p-icon-1" title="Delete Task" data-toggle="modal" href="#myModal-item-delete"><img alt="" src="{{URL::to('Backend/img/dashboard/p-delete.png')}}"></a>
            </div>
            </h3>
            <div class="row-fluid view_comp_deleyed">
             
              <div class="task_no_inner view_task_hr" id ="task_no_inner"> <p><a href="#">days remaining</a></p></div>
            
              <div class="task_compete view_task_hr2">Completed on </div>
             
              <div class="task_delayed view_task_hr3">Delayed</div>
            
            </div>
            <div class="row-fluid view_date">
              <div class="span6 view_date_detail">Start date : <span></span></div>
              <div class="span6 view_date_detail">End date: <span></span></div>
            </div>
            <div class="add-proj-form add_task_form">
              <form class="form-horizontal">
                <fieldset>
                  <div class="control-group">
                    <label class="control-label" for="passwordinput">Project:</label>
                    <div class="controls">
                     
                      <div class="note_for_task"> <a href=""></a></div>
                      
                      <div class="note_for_task"><span class="no_proj_tasks">[No Project is assigned]</span></div>
                   
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="passwordinput">Note:</label>
                    <div class="controls">
                    
                      <div class="note_for_task"></div>
                      
                      <div class="note_for_task"><span class="no_proj_tasks">{{$task->body}}</span></div>
                   
                    </div>
                  </div>
                  <div class="row-fluid span12 a_reamining viewtasklist">
                    <h4>Asignee:</h4>
                    
                    <ul class="collaborators">
                      
                      <ul class="collaborators_comp">
                      
                        <ul class="collaborators_delayed">
                         
                          <li><a href=""></a></li>
                          
                        </ul>
                      </div>
                      <div class="row-fluid span12 a_reamining viewtasklist">
                        <h4>Files:</h4>
                       
                        <div class ="no_file" >
                          [ No files are attached with this Task ]
                        </div>
                       
                        <ul class="files_1">
                          
                          <ul class="files_1_comp files_1">
                           
                            <ul class="files_1_delayed files_1">
                             
                              <li>
                                <a href="">
                                  
                                </a>
                                <span class="view_proj_filedesc"> Uploaded on  by </span>
                              </li>
                        
                            </ul>
                          
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
<!--Start Delete popup  -->
<div id="myModal-item-delete" class="modal cal_light_box hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Really ?</h3>
  </div>
  <div class="modal-body">
    <div class="confirm-delete">Confirm delete the task?</div>
    <div class="confirm-button">
      <form method="post" action="{{url('/dashboard/tasks/delete')}}">  <input type="hidden" name="taskId" id="taskId" value="{{$task['id']}}"  > <button class="submit">Yes please.</a></button></form>
    <button class="submit dontdelete" id="dontdelete" >No Thanks.</a></button></div>
  </div>
</div>
<!-- End Delete Popup -->
 @if(Session::has('status') and Session::has('message') )
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
@endif
@stop
@section('js')
{{ HTML::script('Backend/assets/js/jquery/jquery.blockUI.js') }}
{{ HTML::script('Backend/assets/js/dashboard/viewtask.js') }}
{{ HTML::script('Backend/assets/js/dashboard/subtasks.js') }}
<script>
$(function() {
  var taskModel = new TaskModel()
  var taskview = new TaskView({
    model: taskModel
  });
  var subTaskModel = new SubTaskModel();
  var subTaskView = new SubTaskView({
    model: subTaskModel
  });
});
$(document).on("click", ".dontdelete", function() {

  $('#myModal-item-delete').modal('hide');
});
</script>
@if($task['status'] == 'completed')
<script>
$('.add_new_task_right').block({ message: null });
</script>
@endif
  @stop


