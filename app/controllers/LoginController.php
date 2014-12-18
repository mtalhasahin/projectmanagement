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
class LoginController extends BaseController{
    
          public function login(){
              if(Auth::check()) return Redirect::to('panel');
           return   View::make('backend.login.login')->with('title','Giriş');
          }
          
          public function logout(){
              if(Auth::check()) Auth::logout();
              return Redirect::to('/');
              
          }
          
          public function loginpost(){
              $validate=Validator::make(Input::all(),User::$rules);
              $messages=$validate->messages();
              if($validate->fails()) return Redirect::back()->with(['mesaj'=>'true','title'=>'Hata','text'=>'' . $messages->first() . '','type'=>'error'])->withInput();
              if(Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('password'),'is_active'=>1],Input::get('remember'))){
               
                 return Redirect::intended('panel')->with(['mesaj' => 'true', 'title' => 'Başarılı', 'text' => 'Sayın ' . Auth::user()->nameusername . ' sisteme bağlandınız.', 'type' => 'success']);
                 }    
                 
                 else{
                     return Redirect::back()->with(['mesaj' => 'true', 'title' => 'Hata', 'text' => 'Giriş bilgilerinizi ve kullanıcı durumunuzu kontrol ediniz.', 'type' => 'error'])->withInput();
                 }
          }
    
    
}

?>
