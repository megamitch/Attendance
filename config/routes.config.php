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
    'console'   => [], //routing configuration for CLI modules
    'router'    => [
        'routes' => [
            'mot' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/mot',
                    'defaults'  => [
                        'controller'    => 'Mot\Controller\Index',
                        'action'        => 'index'
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'attendance' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/attendance',
                            'defaults' => [
                                'controller'    => 'MotAttendance\Controller\Attendance',
                                'action'        => 'index'
                            ]
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'disputerequest' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/dispute/requests',
                                    'defaults' => [
                                        'action'        => 'attendance-dispute-requests'
                                    ]
                                ]
                            ],
                            'leave' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/leave',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'leave-form'
                                    ]
                                ]
                            ],
                            'summary-report' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/summary-report',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'attendance-summary-report'
                                    ]
                                ]
                            ],
                            'iss-access' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/iss-access',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'iss-access'
                                    ]
                                ]
                            ],
                            'assigned-personnel-access' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/assigned-personnel-access',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'assigned-personnel-access'
                                    ]
                                ]
                            ],
                            'early-ob' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/early-ob',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'early-ob'
                                    ]
                                ]
                            ],
                            'ob-status-monitoring' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/ob-status-monitoring',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'ob-status-monitoring'
                                    ]
                                ]
                            ],
                            'ob-approval' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/ob-approval',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'ob-approval'
                                    ]
                                ]
                            ],
                            'ob-report' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/ob-report',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'ob-report'
                                    ]
                                ]
                            ],
                            'ob' => [
                                'type'      => 'Literal',
                                'options'   => [
                                    'route'     => '/ob',
                                    'defaults'  => [
                                        'controller'    => 'MotAttendance\Controller\Attendance',
                                        'action'        => 'official-business'
                                    ]
                                ]
                            ]
                        ] //end of attendance child routes
                    ] //end of Attendance
                ]
            ]
        ]        
    ]
];