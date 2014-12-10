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
 * MotAttendance\TimeStamp
 *
 * @package MotAttendance
 */
class TimeStamp
{
    protected $startDate;
    protected $endDate;

    public function setStartDate($date)
    {
        $this->startDate = $date;
    }
    
    public function setEndDate($date)
    {
        $this->endDate = $date;
    }
    
    
    public function getTime()
    {
        $this->entity->setCutoffdate($this->startDate, $this->endDate);
        $this->mapper->setEmployee($this->getEmployeeId());
        
        $result  = $this->mapper->getTimeLogged($this->startDate, $this->endDate);       
        
        $this->entity->setTimeLog($result['time']);
        
        return $this->entity->getTime();
    }
}
