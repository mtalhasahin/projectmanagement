@extends('backend.admin.layout.master')

@section('content')
<div id="contentwrapper">
  <div class="main_content">
    <div class="row-fluid">
      <div class="span12 project_detail">
        <h2><a href="{{URL::to('panel')}}">Dashboard</a> / <a href="{{URL::to('tasks/list')}}">Görevler</a> / Yeni Görev</h2>
        <!-- Add New Task -->
        <div class="row-fluid add_new_task">
          <div class="span7 add_new_task_left" id="add_new_task_left">
          
 <form class="form-horizontal" action="{{URL::to('/tasks')}}" id="newtaskform" method="post"  data-validate="parsley"  >  
              <h3>
              <input type="text" name="title" id="title" class="task_create_in" value="" placeholder="Görev Adı (gerekli)"  data-show-errors="false">
                  
              </h3>
              {{$errors->first('title','<span class="error">:message</span>')}}
              <div class="add-proj-form add_task_form">
                <fieldset> 
                  <div class="control-group">
                    <label for="body">Açıklama :
                      <p class="help-block">(isteğe bağlı)</p>
                    </label>
                    <textarea name="body" id="aciklama" class="add-proj-form-t" placeholder="Açıklama"></textarea>
                     {{$errors->first('body','<span class="error">:message</span>')}}
                  </div>
                  <div class="control-group">
                    <label for="user_id">Görev Atanan :</label>
                    <div class="controls" style="margin:0;">
                      <div class="span12 flatui-detail" style="position:relative;">
                        {{Form::select('user_id',$users)}}
                        {{$errors->first('user_id','<span class="error">:message</span>')}}
                        
                      </div>
                   
                    </div>
                  </div>
                  <div class="add_task_button_main"><button class="add_task_submit">Gönder</button></div>
                </fieldset>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

  @stop
  @section('js')
  {{ HTML::script('Backend/assets/js/jquery/jquery.blockUI.js') }}
  {{ HTML::script('Backend/assets/js/dashboard/addtask.js') }}
  
{{ HTML::style('Backend/assets/css/dashboard/backbone.autocomplete.css') }}
{{ HTML::script('Backend/assets/js/dashboard/backbone.autocomplete.js') }}
{{ HTML::script('Backend/assets/js/dashboard/projectuserlist.js') }}
{{ HTML::style('Backend/assets/css/dashboard/pickadate.css') }}
{{ HTML::style('Backend/assets/css/dashboard/pickadate.date.css') }}
{{ HTML::style('Backend/assets/css/dashboard/pickadate.time.css') }}
{{ HTML::style('Backend/assets/css/simplelogin/parsley.css') }}
{{ HTML::script('Backend/assets/js/dashboard/legacy.js') }}
{{ HTML::script('Backend/assets/js/dashboard/picker.js') }}
{{ HTML::script('Backend/assets/js/dashboard/picker.date.js') }}
{{ HTML::script('Backend/assets/js/simplelogin/parsley.js') }}
{{ HTML::script('Backend/assets/js/dashboard/addtask.js') }}
{{ HTML::script('Backend/assets/js/dashboard/datecheck.js') }}
<script>
$(document).ready(function() {
            $('.tooltipster-icon').tooltipster();
        });
</script>
@stop

