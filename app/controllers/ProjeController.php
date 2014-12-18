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
class ProjeController extends BaseController{
    
         public function getProje(){
             
         return View::make('backend.admin.project.proje')->with('title','Proje');
             
         }
         public function getAdd(){
             return View::make('backend.admin.project.add')->with('title','Proje Ekle');
             
         }
    
}

?>
