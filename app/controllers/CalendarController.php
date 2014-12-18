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
class CalendarController extends BaseController{
    
       public function getCalendar(){
           return View::make('backend.admin.calendar.view');
        
       }
       
       public function getCreatedbyme(){
           
           return View::make('backend.admin.calendar.createdbyme');
       }
}

?>
