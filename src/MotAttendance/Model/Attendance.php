<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 namespace MotAttendance\Model;

 class Attendance
 {
     public $time_log_id;
     public $employee_id;
     public $log_date;
     public $keylog;

     public function exchangeArray($data)
     {
         $this->time_log_id = (!empty($data['time_log_id'])) ? $data['time_log_id'] : null;
         $this->employee_id = (!empty($data['employee_id'])) ? $data['employee_id'] : null;
         $this->log_date  = (!empty($data['log_date'])) ? $data['log_date'] : null;
         $this->keylog=(!empty($data['keylog'])) ? $data['keylog'] : null;
     }
 }
