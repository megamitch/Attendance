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


return [
    'navigation' => [
        'sidebar' => [
            "attendance" => [
                'label' => "Manage Attendance",
                'route' => "#",
                'icon' => "fa fa-calendar",
                "pages" => [
                    "summary-report" => [ 
                        'label' => "Attendance Summary Report",
                         'route' => "mot/attendance/summary-report",
                         'icon' => "fa fa-calendar"
                     ],
                    "ob-status-monitoring" => [
                        'label' => "OB Status Monitoring",
                        'route' => "mot/attendance/ob-status-monitoring",
                        'icon' => "fa fa-briefcase"
                    ],
                    "ob-approval" => [
                        'label' => "OB Approval",
                        'route' => "mot/attendance/ob-approval",
                        'icon' => "fa fa-briefcase"
                    ],
                    "ob-report" => [
                        'label' => "OB Report",
                        'route' => "mot/attendance/ob-report",
                        'icon' => "fa fa-briefcase"
                    ],
//                    "leave" => [
//                        'label' => "Leave",
//                        'route' => "mot/attendance/leave",
//                        'icon' => "fa fa-calendar"
//                    ]
                ] //endofpages
            ]
        ],
        'header' => [
            "attendance-request" => [
                'label' => "Attendance Requests",
                'route' => "#",
                'icon' => "fa fa-calendar",
                'pages' => [
                    "attendance" => [
                        'label' => "View Current DTR",
                        'route' => "mot/attendance",
                        'icon' => "fa fa-calendar"
                    ],
                    "regular-ob" => [
                        'label' => "Regular OB",
                        'route' => "mot/attendance/ob",
                        'icon' => "fa fa-calendar"
                    ],
                    "early-ob" => [
                        'label' => "Early OB",
                        'route' => "mot/attendance/early-ob",
                        'icon' => "fa fa-calendar"
                    ],
                    "leave" => [
                        'label' => "Leave",
                        'route' => "mot/attendance/leave",
                        'icon' => "fa fa-calendar"
                    ],
                ]
            ]            
        ]
    ]
];