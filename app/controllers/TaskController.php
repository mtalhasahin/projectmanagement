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
class TaskController extends BaseController {

    public function getList() {
        $tasks = Tasks::with('user')->get();

        return View::make('backend.admin.tasks.list', compact('tasks'))->with('title', 'Görevler');
    }

    public function getAdd() {
        $users = User::lists('nameusername', 'id');
        return View::make('backend.admin.tasks.add', compact('users'))->with('title', 'Görev Ekle');
    }

    public function getView($id) {
        $task = Tasks::findOrFail($id);
        $users = User::lists('nameusername', 'id');
        return View::make('backend.admin.tasks.view', compact('task', 'users'));
    }

    public function store() {

        $task = new Tasks(Input::all());

        if (!$task->save()) {
            return Redirect::back()->withInput()->withErrors($task->getErrors());
        }

        return Redirect::to('tasks/list');
    }
    public function update($id){
        $task= Tasks::find($id);
        $task->completed = Input::get('completed') ? Input::get('completed') : 0;
        $task->save();
         return Redirect::to('tasks/list');
        
    }
}

?>
