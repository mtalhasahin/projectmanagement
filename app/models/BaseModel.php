<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseModel
 *
 * @author Dell
 */
class BaseModel extends Eloquent {
    //put your code here
    
    protected $errors;
    
    public static function boot(){
        
        parent::boot();
        
        static::saving(function($model){
            
            return $model->validate();
        });
    }
    
    
    
    public function validate(){
        
        $validation = Validator::make($this->getAttributes(),static::$rules);
        
        if($validation->fails()){
            $this->errors = $validation->messages();
            return false;
        }
        
        return true;
    }
    
    public function getErrors(){
        return $this->errors;
    }
}
