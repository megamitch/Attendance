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

namespace MotAttendance\Service;

/**
 * MotAttendance\Service\Attendance
 *
 * @package MotAttendance\Service
 */
class Attendance
{
    protected $employee;
    protected $timestamp;
    
    
    public function setEmployee(Employee $employee)
    {
        $this->employee = $employee;
    }
    
    public function getEmployee()
    {
        return $this->employee;
    }
    
    public function setTimestamp(TimeStampService $time)
    {
        $this->timestamp = $time;
    }
    
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    public function getAttendance($startDate, $endDate)
    {
        $employee = $this->getEmployee()->getId();    
        $this->getTimestamp()->setEmployee($employee);
        
        $cutoff = $this->getTimestamp()
                ->setStartDate($startDate)
                ->setEndDate($endDate);
        
        return $this->printDtr($cutoff->getTime());
    }
    
    
    protected function printDtr(TimeStamp $cutoff)
    {
        return new Dtr($cutoff);
    }
}
