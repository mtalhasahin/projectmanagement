<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
        
        public function getReminderEmail() {
            return $this->email;
        }


        public static $rules=['email'=>'required|email','password'=>'required'];
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        public function tasks(){
            
            return $this->hasMany('Tasks');
        }
        
        public static function byUsername($nameusername){
            
            return static::whereNameusername($nameusername)->first();
        }

}
