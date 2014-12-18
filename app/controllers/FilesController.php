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
class FilesController extends BaseController{
    
         public function files(){
             
         return View::make('backend.admin.files')->with('title','Dosyalar');
             
         }
    
}

?>
