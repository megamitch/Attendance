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
/**
 * \Attendance
 *
 * @package 
 */

namespace MotAttendance\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class Attendance {

    protected $tableGateway;
    protected $adapter;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
        
//         $this->adapter=new Zend\Db\Adapter\Adapter([
//                'driver'=>'Mysql',
//                'database'=>'mmci_attendance',
//                'username'=>'root',
//                'password'=>'Megamitch123!!'
//            ]);
    }

    public function fetchAll() {
//         var_dump($this->tableGateway->getAdapter()->getDriver()->getConnection()->isConnected()); exit;
        $resultSet = $this->tableGateway->select();
        return $resultSet;
        //query from timeclock_schedule and employee_time_log??s??
    }

    public function fetchAllOb() {
        //insert query for OB   
    }

    public function dispute($id, $reason, $effect) {
        $data = ['id' => $id,
                 'reason' => $reason,
                 'effect' => $effect
        ];
        $this->tableGateway->insert($data);

        //no table for dispute application???
    }

    public function updateAttendance($id, $columnName, $timeValue) {

        $this->tableGateway->update(["'" . $columnName . "'" => $timeValue], ['id' => $id]);

        //update table timeclock_schedule/employee_time_logs?????
    }

}
