<?php

/**
 * The MIT License
 *
 * Copyright (c) 2012-2014, contributors of Mega Mitch Credit, Inc. software project.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace MotAttendance\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Zend\Db\TableGateway\TableGateway;
use MotAttendance\Model\Attendance;
use Zend\Db\ResultSet\ResultSet;

/**
 * MotAttendance\Controller\AttendanceController
 * 
 * @package MotAttendance\Controller
 */
class AttendanceController extends AbstractActionController
{
    private $attendanceTable;
  
    public function indexAction()
    {
        $attendance = [
                  'title' => strtoupper('Attendance'),
                  'name' => 'datatables7',
                  'header' => ['Work Date','Day','Type', 'In', 'Out', 'Remarks', 'Action'],
                  'data'  => [
                     ['10/14/2014','tue','Logged','9:00 AM','12:00 PM','',$this->disputeButton(1)],
                     ['10/14/2014','tue','Logged','9:00 AM','12:00 PM','',$this->disputeButton(2)],
                     ['10/19/2014','tue','Logged','9:00 AM','12:00 PM','',$this->disputeButton(3)]
                  ]
              ];    
        $modal=$this->createModal(1, '10/14/2014').$this->createModal(2, '10/14/2014').$this->createModal(3, '10/19/2014');
        
        return new ViewModel(['result' => [$attendance],'modal'=>$modal]);      
        
    }
    
    public function leaveFormAction()
    {
        
    }
        
    public function attendanceDisputeAction()
    {

        
    }

    public function attendanceSummaryReportAction()
    {
        $result=[['first_name'=>'Maria','last_name'=>'Aguanta','emp_id'=>'01-0018','dept'=>'Credit Officer'],
                 ['first_name'=>'Roda Joy','last_name'=>'Eluna','emp_id'=>'01-0019','dept'=>'HR Manager']
                ]; 
        
        $employee_options="";
        
        if(empty($result)){
            $employee_options="<option>No employee records found.</option>";
        }else{
            foreach($result as $data){
            $employee_options.=$this->createOption($data['first_name'],$data['last_name'],$data['emp_id']);    
            }
            $employee_options="<option>Employee</option>".$employee_options;
        }
        $summaryReport = [
            'title' => strtoupper('OB Report'),
            'name' => 'datatables9',
            'header' => ['Work Date','Day','Type', 'Actual Time In', 'Actual Time Out', 'Late In', 'Early Out', 'Brk Total', 
                         'Remarks'],
            'data'  => [
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
            ]
        ];
        
        $details=[
            "name"=>"Maria Aguanta",
            "emp_id"=>"01-0018",
            "dept"=>"Sales",
            "position"=>"Credit Officer",
            "from"=>"10/14/2014",
            "to"=>"10/26/2014"
        ];
        return new ViewModel(["employee" => $employee_options,"result"=>[$summaryReport],"details"=>$details]);
    }
     
    public function issAccessAction()
    {
        $result=[['first_name'=>'Maria','last_name'=>'Aguanta','emp_id'=>'01-0018','dept'=>'Credit Officer'],
                 ['first_name'=>'Roda Joy','last_name'=>'Eluna','emp_id'=>'01-0019','dept'=>'HR Manager']
                ]; 
        
        $employee_options="";
        
        if(empty($result)){
            $employee_options="<option>No employee records found.</option>";
        }else{
            foreach($result as $data){
            $employee_options.=$this->createOption($data['first_name'],$data['last_name'],$data['emp_id']);    
            }
            $employee_options="<option>Employee</option>".$employee_options;
        }
        $summaryReport = [
            'title' => strtoupper('OB Report'),
            'name' => 'datatables9',
            'header' => ['Work Date','Day','Type', 'Actual Time In', 'Actual Time Out', 'Late In', 'Early Out', 'Brk Total', 
                         'Remarks'],
            'data'  => [
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
            ]
        ];
         $details=[
            "name"=>"Maria Aguanta",
            "emp_id"=>"01-0018",
            "dept"=>"Sales",
            "position"=>"Credit Officer",
            "from"=>"10/14/2014",
            "to"=>"10/26/2014"
        ];
        return new ViewModel(["employee" => $employee_options,"result"=>[$summaryReport],"details"=>$details]);
    }
    
    public function assignedPersonnelAccessAction()
    {
        $branch="";    
        $result=['Iligan','Corp','Lugait'];
        //$branch=[];
        if(empty($result)){
            $branch='<option>No Records Found.</option>';
        }else{
            foreach($result as $data){
                $branch.="<option>".$data."</option>";
            }
            $branch="<option>Branch</option>".$branch;
        }
        $summaryReport = [
            'title' => strtoupper('OB Report'),
            'name' => 'datatables9',
            'header' => ['Work Date','Day','Type', 'Actual Time In', 'Actual Time Out', 'Late In', 'Early Out', 'Brk Total', 
                         'Remarks'],
            'data'  => [
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
                ['10/14/2014','Tue','Logged','8:47','18:10','','','',''],
            ]
        ];
          $details=[
            "name"=>"Maria Aguanta",
            "emp_id"=>"01-0018",
            "dept"=>"Sales",
            "position"=>"Credit Officer",
            "from"=>"10/14/2014",
            "to"=>"10/26/2014"
        ];
        return new ViewModel(["branch" => $branch,"result"=>[$summaryReport],"details"=>$details]);
    }
    private function createButtons($id){
        $buttons='<td>'
                . '<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#Approved'.$id.'">
                    <i class="fa fa-check"></i></button>
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#Denied'.$id.'">
                    <i class="fa fa-times"></i>
                </button></td>';
        return $buttons;
    }
    private function setModal($id,$stat){
        $modal= '<div class="modal fade" id="'.$stat.$id.'" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" align="left">OB '.$stat.'</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-lg-3 col-md-3"></div>
              <div class="col-lg-6 col-md-6" align="left">
                  <strong>Approval:</strong><br>
                  <form method="post" action="">
                  <input class="input-sm" type="text" placeholder="Name"></input><br>
                  <textarea placeholder="Comment" rows="5" cols="19"></textarea>
              </div>
              <div class="col-lg-3 col-md-3"></div>
          </div>          
      </div>    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>';
     return $modal;   
    }
    private function setColorScheme($id,$date,$day,$type,$in,$out,$comment)
    {
        $record=[$date,$day,$type,$in,$out];    
        $result="";    
        foreach($record as $data){
            
               if(empty($data)){
                   $result.="<td class='danger'><font color='red'>-</font></td>";
               }else{
                   $result.="<td>".$data."</td>";
               } 
            }
            if($day=="sun"){
                $comment="holiday";
                
                $result.="<td>".$comment."</td><td></td>";
                $result="<tr class=\"danger\">".$result."</tr>"; 
            }else if($type==""){
                $comment="absent";
            
                $result.="<td>".$comment."</td><td>" .
                        '<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#'.$id.'">
                            <i class="fa fa-pencil-square-o"> Dispute</i>
                         </button>'
                        . "</td>";
                $result.=$this->createModal($id,$date);
                 $result="<tr class=\"danger\">".$result."</tr>";
            }else{
                $result.="<td>".$comment."</td><td>" .
                        '<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#'.$id.'">
                            <i class="fa fa-pencil-square-o"> Dispute</i>
                         </button>'
                        . "</td>";
                $result.=$this->createModal($id,$date);
                $result="<tr>".$result."</tr>";
            }
            
                    
        return $result; 
    }
    private function disputeButton($id){
        return '<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#'.$id.'">
                            <i class="fa fa-pencil-square-o"> Dispute</i>
                         </button>';
    }
    private function createOption($first_name,$last_name,$emp_id){
        $result="";
        $result.="<option value=".$emp_id."><b>".strtoupper($last_name)."</b>, ".$first_name."</option>";
        return $result;
        
    }
    private function createModal($id,$date){
      return  '<div class="modal fade" id="'.$id.'" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" align="left">Attendance Dispute Request Form</h4>
      </div>
      <div class="modal-body">
       
          <div class="row"> 
              <div class="col-md-1"></div>
              <div class="col-md-10">
                  
                    <p><strong>Name:</strong> Maria Agwanta</p>

                    <div class="row">
                        <div class="col-md-6">
                        <p><strong>Dispute Date:</strong>'.$date.'<p>
                        </div>
                        <div class="col-md-6" align="right">
                        <p><strong>Date Created:</strong>'.date('m/d/Y').'</p>
                        </div>         
                    </div>
                  
                    <div class="row">
                    <div class="col-md-6">
                        <strong>Dispute reason/cause</strong>
                    </div>
                    <div class="col-md-6">
                        <strong>Dispute outcome/effect</strong>
                    </div>
                    </div>
                    <form method="post" action="">
                    <div class="row" align="center">
                    <div class="col-md-6">
                        <textarea rows="4"></textarea>
                    </div>
                    <div class="col-md-6" align="right">
                        <textarea rows="4"></textarea><br>
                    </div>
                    </div>
                    </form>
              </div>
              <div class="col-md-1"></div>
          </div>
      </div>    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>';
    }
    private function format($data){
        $result="";
        foreach ($data as $value){
            if(!$value){
                $result.="<td class=\"danger\">-</td>";
            }else{
                $result.="<td>".$value."</td>";
            }
        }
        return $result;
    }    
    public function getCurrentTimeLogs()
    {
//        $attendance = new \MotAttendance\Service\Attendance();
        $attendance->setEmployee($this->params('emplyoee_id'));
        
        return new JsonModel($service->getAttendance($this->params('start_date'), $this->params('end_date')));
    }
    
    
    
    private function getAttendanceForCurrentMonth()
    {
        $startDate = date();
        $endDate = date();
        
        $service;
    }
    
   
    
    }


