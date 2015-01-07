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
//      $result=[['date'=>'01/02/15','status'=>'denied','processed_by'=>'J.O.','comment'=>'not valid','type'=>'regular','date-requested'=>'01/02/15','time_requested'=>'9:10 AM',
//                'from'=>'Iligan','to'=>'Lugait','purpose'=>'ocular inspection','description'=>'fare back and forth','amount'=>'500.00','ob_out'=>'10:00 AM','ob_in'=>'5:00PM'],
//               ['date'=>'01/03/15','status'=>'approved','processed_by'=>'R.J.E.','comment'=>'important','type'=>'early','date-requested'=>'01/02/15','time_requested'=>'9:10 AM',
//                'from'=>'Iligan','to'=>'Lugait','purpose'=>'ocular inspection','description'=>'fare & snacks','amount'=>'1,000.00','ob_out'=>'','ob_in'=>'5:00PM'] 
//              ];
//      
//      $data="";
//     
//      if(empty($result)){
//          $data="<tr><td colspan=\"15\" align=\"center\"><font color=\"red\">No records found.</font></td></tr>";
//      }else{
//          foreach($result as $res){
//          $data.='<tr>'.$this->format($res).'</tr>';
//      }
//      }
//      return new ViewModel(["data" => $data]);     
  
    $OBStatus = [
            'title' => strtoupper('OB Report'),
            'name' => 'datatables5',
            'header' => ['Date','Status','Processed by', 'Comment', 'Type', 'Date Requested', 'Time Requested', 'Destination From', 
                         'Destination To', 'Purpose','Expense Description','Expense Amount','OB Out','OB In'],
            'data'  => [
                ['01/03/15','approved','R.J.E.','important','early','01/02/15','9:10 AM',
                'Iligan','Lugait','ocular inspection','fare & snacks','1,000.00','','5:00PM'],
                ['01/03/15','approved','R.J.E.','important','early','01/02/15','9:10 AM',
                'Iligan','Lugait','ocular inspection','fare & snacks','1,000.00','','5:00PM'],
                ['01/03/15','approved','R.J.E.','important','early','01/02/15','9:10 AM',
                'Iligan','Lugait','ocular inspection','fare & snacks','1,000.00','','5:00PM'],
                ['01/03/15','approved','R.J.E.','important','early','01/02/15','9:10 AM',
                'Iligan','Lugait','ocular inspection','fare & snacks','1,000.00','','5:00PM'],
            ]
        ];
        
             
        return new ViewModel(['result' => [$OBStatus]]);
        
    } 
    
    public function obStatusMonitoringAction()
    {
       /** $results=[['status'=>'denied','processed_by'=>'Jermaine Obial','comment'=>'No budget for OB Trip','type'=>'early OB',
                    'date'=>'12/13/14','time'=>'10:30 AM','from'=>'Iligan','to'=>'BDO Iligan','purpose'=>'apply for atm card'],
                  ['status'=>'approved','processed_by'=>'Jermaine Obial','comment'=>'valid reason','type'=>'early OB',
                    'date'=>'12/15/14','time'=>'10:30 AM','from'=>'Iligan','to'=>'Pag-Ibig Iligan','purpose'=>'apply for loan'],
                  ['status'=>'denied','processed_by'=>'Jermaine Obial','comment'=>'','type'=>'Regular OB',
                    'date'=>'12/15/14','time'=>'10:30 AM','from'=>'','to'=>'','purpose'=>'']
                ];
        $data="";
        if(empty($results)){
            $data="<tr><td colspan=\"12\"align=\"center\"><font color=\"red\">No records found.</font></td></tr>";
        }else{
            foreach($results as $value){
                $data.='<tr>'.$this->format($value).'</tr>';
            }
        }
              
         return new ViewModel(["data" => $data]);*/
     
        $OBStatus = [
            'title' => strtoupper('OB Status'),
            'name' => 'datatables3',
            'header' => ['Status','Processed by', 'Comment', 'Type', 'Date', 'Time', 'Destination From', 'Destination To', 'Purpose'],
            'data'  => [
                ['Denied','Jermaine Obial', 'No Budget for OB Trip', 'Early OB', '12/13/14', '10:30 AM', 'Iligan City', 'BDO Iligan','Apply for ATM Card'],
                ['Approved','Jermaine Obial', 'No Budget for OB Trip', 'Early OB', '12/13/14', '10:30 AM', 'Iligan City', 'BDO Iligan','Apply for ATM Card'],
                ['Denied','Jermaine Obial', 'No Budget for OB Trip', 'Early OB', '12/13/14', '10:30 AM', 'Iligan City', 'BDO Iligan','Apply for ATM Card'],
                ['Approved','Jermaine Obial', 'No Budget for OB Trip', 'Early OB', '12/13/14', '10:30 AM', 'Iligan City', 'BDO Iligan','Apply for ATM Card']
            ]
        ];
        
             
        return new ViewModel(['result' => [$OBStatus]]);
    }    
   
    public function obApprovalAction()
    {
//        $result=[['id'=>1,'name'=>'Roda Joy Eluna','branch'=>'Corp','dept'=>'HR','type'=>'early','date'=>'04/26/15','time'=>'9:00 AM',
//                  'from'=>'Iligan City','to'=>'Pag-Ibig','purpose'=>'mag-loan ug lovelife','description'=>'fare & snacks',
//                  'amt'=>'1,000.00'  ],
//                  ['id'=>2,'name'=>'Roda Joy Eluna','branch'=>'Corp','dept'=>'HR','type'=>'early','date'=>'','time'=>'9:00 AM',
//                  'from'=>'Iligan City','to'=>'Pag-Ibig','purpose'=>'mag-loan ug lovelife','description'=>'',
//                  'amt'=>'1,000.00'  ],
//                ];
//        $data="";
//        if(empty($result)){
//            $data="<tr><td colspan=\"12\"align=\"center\"><font color=\"red\">No records found.</font></td></tr>";
//        }else{
//            
//            foreach($result as $value){
//             $id=array_shift($value);   
//             $data.='<tr>'.$this->format($value);
//             $data.=$this->createButtons($id);
//             $data.=$this->setModal($id,'Approved');
//             $data.=$this->setModal($id,'Denied');
//             $data.='</tr>';
//            }
//        }
//        return new ViewModel(["data" => $data]);
        $OBApproval = [
            'title' => strtoupper('OB Approval'),
            'name' => 'datatables12',
            'header' => ['Name','Branch', 'Department', 'Type', 'Date', 'Time', 'Destination From', 'Destination To', 'Purpose',
                         'Expense Description','Expense Amount','Action'],
            'data'  => [
                ['Roda Joy Eluna','Corp','HR','early','04/26/15','9:00 AM',
                  'Iligan City','Pag-Ibig','mag-loan ug lovelife','fare & snacks',
                  '1,000.00',$this->createButtons(1) ],
                ['Roda Joy Eluna','Corp','HR','early','04/26/15','9:00 AM',
                  'Iligan City','Pag-Ibig','mag-loan ug lovelife','fare & snacks',
                  '1,000.00',$this->createButtons(2) ],
                ['Roda Joy Eluna','Corp','HR','early','04/26/15','9:00 AM',
                  'Iligan City','Pag-Ibig','mag-loan ug lovelife','fare & snacks',
                  '1,000.00',$this->createButtons(3)],
            ]
        ];
        $modal=$this->setModal(1,'Approved').$this->setModal(1,'Denied');
        $modal.=$this->setModal(2,'Approved').$this->setModal(2,'Denied');        
        $modal.=$this->setModal(3,'Approved').$this->setModal(3,'Denied');        
             
        return new ViewModel(['result' => [$OBApproval],'modal'=>$modal]);
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
    
}
