<?php

/**
 * The MIT License
 *
 * Copyright (c) 2012-2015, Mega Mitch, Inc.
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
