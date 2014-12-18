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
class PanelController extends BaseController{
    
       public function getIndex(){
           
           return View::make('backend.admin.project/proje')->with('title','Anasayfa');
       }
       
       
}

?>
