<?php



class Tasks extends BaseModel{
    
    
    protected $guarded=['id'];
    
protected static $rules=[
        'title'=>'required',
        'body'=>'required',
       
        
    ];


    public function user(){
    
    return $this->belongsTo('User');
}
	
public static function byUsername($nameusername){
    
    return User::byUsername($nameusername)->tasks;
    
}

public static function find($id,$nameusername=null){
    $task=  static::with('user')->find($id);
    
    if($nameusername and $task->user->nameusername !==$nameusername){
        
        throw Illuminate\Database\Eloquent\ModelNotFoundException;
    }else{
        return $task;
        
    }
    
}

}
