<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Dell
 */
class UserTasksController extends BaseController{
    
       public function index($nameusername){
           
           $tasks= Tasks::byUsername($nameusername);
           return View::make('backend.admin.tasks.list',compact('tasks'));
       }
       
       public function show($nameusername,$taskId){
           
           $task=Tasks::find($taskId,$nameusername);
           
           return View::make('backend.admin.tasks.view',compact('task'));
       }
}

?>
