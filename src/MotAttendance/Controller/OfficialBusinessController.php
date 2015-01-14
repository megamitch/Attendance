<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MotAttendance\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
/**
 * MotAttendance\Controller\OBController
 *
 * @package MotAttendance\Controller
 */
class OfficialBusinessController extends AbstractActionController{
    
     public function officialBusinessAction()
    {
      
    }
     public function earlyObAction()
    {
    
    } 
     public function obReportAction()
    {
         $result=[
                    ['01/03/15','approved','R.J.E.','important','early','01/02/15','9:10 AM',
                  'Iligan','Lugait','ocular inspection','fare & snacks','1,000.00','','5:00PM'],
                    ['01/03/15','approved','R.J.E.','important','early','01/02/15','9:10 AM',
                  'Iligan','Lugait','ocular inspection','fare & snacks','1,000.00','','5:00PM'],
                    ['01/03/15','pending','R.J.E.','important','early','01/02/15','9:10 AM',
                  'Iligan','','ocular inspection','fare & snacks','','','5:00PM'],
                 ];
         $data=[];
         
         if($result){
         foreach ($result as $value){
             array_push($data,$this->setColor($value));
         }
         }
    $OBStatus = [
            'title' => strtoupper('OB Report'),
            'name' => 'datatables14',
            'header' => ['Date','Status','Processed by', 'Comment', 'Type', 'Date Requested', 'Time Requested', 'Destination From', 
                         'Destination To', 'Purpose','Expense Description','Expense Amount','OB Out','OB In'],        
            'data'=>$data 
        ];
        
             
        return new ViewModel(['result' => [$OBStatus]]);
        
    } 
    
    public function obStatusMonitoringAction()
    {
        $result=[
                    ['Denied','Jermaine Obial', 'No Budget for OB Trip', 'Early OB', '12/13/14', '10:30 AM', 'Iligan City', '','Apply for ATM Card'],
                    ['Denied','Jermaine Obial', '', 'Early OB', '12/13/14', '10:30 AM', 'Iligan City', 'BDO Iligan','Apply for ATM Card'],
                    ['Denied','Jermaine Obial', 'No Budget for OB Trip', 'Early OB', '', '10:30 AM', 'Iligan City', 'BDO Iligan','Apply for ATM Card'],
                 ];
         $data=[];
         
         if($result){
         foreach ($result as $value){
             array_push($data,$this->setColor($value));
         }
         }
        
        $OBStatus = [
            'title' => strtoupper('OB Status'),
            'name' => 'datatables9',
            'header' => ['Status','Processed by', 'Comment', 'Type', 'Date', 'Time', 'Destination From', 'Destination To', 'Purpose'],
            'data'  =>$data
        ];
        
             
        return new ViewModel(['result' => [$OBStatus]]);
    }    
   
    public function obApprovalAction()
    {   
        $result=[
                [1,'Roda Joy Eluna','Corp','HR','early','04/26/15','9:00 AM',
                  'Iligan City','','mag-loan ug lovelife','fare & snacks',
                  '1,000.00'],
                [2,'Roda Joy Eluna','Corp','HR','early','','9:00 AM',
                  'Iligan City','Pag-Ibig','mag-loan ug lovelife','fare & snacks',
                  '1,000.00'],
                [3,'Roda Joy Eluna','Corp','HR','early','04/26/15','9:00 AM',
                  'Iligan City','Pag-Ibig','mag-loan ug lovelife','',
                  '1,000.00']
                ];
        $data=[];
        
         if($result){
            foreach ($result as $value){
                $id=array_shift($value);
                $temp=$this->setColor($value);
                array_push($temp,$this->createButtons($id));
                array_push($data,$temp);
            }
         }
        
        $OBApproval = [
            'title' => strtoupper('OB Approval'),
            'name' => 'datatables12',
            'header' => ['Name','Branch', 'Department', 'Type', 'Date', 'Time', 'Destination From', 'Destination To', 'Purpose',
                         'Expense Description','Expense Amount','Action'],
            'data'=>$data

        ];
        
        $modal=$this->setModal(1,'Approved').$this->setModal(1,'Denied');
        $modal.=$this->setModal(2,'Approved').$this->setModal(2,'Denied');        
        $modal.=$this->setModal(3,'Approved').$this->setModal(3,'Denied');        
             
        return new ViewModel(['result' => [$OBApproval],'modal'=>$modal]);
    }
   
    private function setColor($result){
        
        $returnValue=[];
        
        foreach ($result as $data){
            if($data==''){
               array_push($returnValue,'<b><font color="red">---</font></b>');
            }else{
               array_push($returnValue,$data); 
            }
        }
        return $returnValue;
    }
    
    private function createButtons($id){
        $buttons='<button type="button" class="btn btn-xs" data-toggle="modal" data-target="#Approved'.$id.'">
                    <i class="fa fa-check"></i></button>
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#Denied'.$id.'">
                    <i class="fa fa-times"></i>
                </button>';
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
    
    
}
