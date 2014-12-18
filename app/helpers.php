<?php

function gravatar($email,$nameusername){
    
    return '<img src="http://www.gravatar.com/avatar/'.md5($email).'?s=40" alt="'.$nameusername.'"/>';
}

function link_to_task(Tasks $task){
    
return link_to_route('user.tasks.show',$task->title,[$task->user->nameusername,$task->id]);
}
