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
class KullaniciController extends BaseController{
    
      
        
        public function getKullaniciekle(){
            
            return View::make('backend.kullanici.ekle')->with('title','Kullanıcı Ekle');
        }
        public function postKullaniciekle(){
             $validate=Validator::make(Input::all(),User::$rules);
       $messages=$validate->messages();
       if($validate->fails()) return Redirect::back()->with(array('mesaj'=>'true','title'=>'Doğrulama Hatası','text'=>''.$messages->first().'','type'=>'error'));
           $user=new User;
           $email=Input::get('email');
           $nameusername=Input::get('adsoyad');
           $password=Hash::make(Input::get('password'));
           $user->email=$email;
           $user->password=$password;
           $user->nameusername= $nameusername;
           
           if($user->save()){
               return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kullanıcı Eklendi','text'=>'Kullanıcı başarılı bir şekilde eklendi','type'=>'success'));
           }else{
               return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kullanıcı Eklenmedi','text'=>'Kullanıcı eklenirken bir sorun ile karşılaşıldı','type'=>'error'));
           }
           
            
         
        }
        
        public function getKullanicilistele(){
            
            $kullanicilar=User::all();
            return View::make('backend.kullanici.listele',array('users'=>$kullanicilar))->with('title','Kullanıcı Listele');
        }
        public function getKullaniciaktif($id,$aktif){
            $user=User::find($id);
               $user->is_active= $aktif;
               $user->save();
            
            
            if($user->save()){
                return Response::json(array('mesaj'=>'true','title'=>'Kullanıcı Güncellendi','text'=>'Kullanıcı başarılı bir şekilde güncellendi','type'=>'success'));
                
            }else{
                return Response::json(array('mesaj'=>'true','title'=>'Kullanıcı Güncellenemedi','text'=>'Kullanıcı güncellenirken bir sorun ile karşılaşıldı','type'=>'error'));
            }
        }
        
        public function getKullanicisil($id){
            $user=User::find($id);
            $user->delete();
            if (!$user->delete()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Kullanıcı Silindi', 'text' => 'Kullanıcı Başarı İle Silindi', 'type' => 'success'));
            } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Kullanıcı Silinemedi', 'text' => 'Kullanıcı Silinirken Sorun İle Karşılaşıldı', 'type' => 'error'));
        }
            
        }
        
        public function getKullaniciduzenle($id){
            $user=User::find($id);
            return View::make('backend.kullanici.duzenle')->with(array('user'=>$user,'title'=>'Kullanıcı Düzenle'));
            
        }
        
        public function postKullaniciduzenle($id){
            $rules=['adsoyad'=>'required','email'=>'required|email'];
    $validate=Validator::make(Input::all(),$rules);
       $messages=$validate->messages();
       if($validate->fails()) return Redirect::back()->with(array('mesaj'=>'true','title'=>'Doğrulama Hatası','text'=>''.$messages->first().'','type'=>'error'));
           $user=User::find($id);
           $email=Input::get('email');
           $nameusername=Input::get('adsoyad');
           if(Input::has('password')){
                $password=Hash::make(Input::get('password'));
                $user->password=$password;
                $user->save();
           }
          
           $user->email=$email;
           $user->nameusername= $nameusername;
           $user->save();
           
           if($user->save()){
               return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kullanıcı Güncellendi','text'=>'Kullanıcı başarılı bir şekilde güncellendi','type'=>'success'));
           }else{
               return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kullanıcı Güncellenemedi','text'=>'Kullanıcı güncellenirken bir sorun ile karşılaşıldı','type'=>'error'));
           }
           
        }
        
       
}

?>
