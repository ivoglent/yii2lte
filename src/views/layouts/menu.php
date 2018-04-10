<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 4/10/18
 * Time: 3:12 PM
 */
return [
    [
        'label' => '<i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            [
                'label' => \Yii::t('app', '<i class="fa fa-circle-o"></i> Dashboard v1'),
                'url' => ['/adminlte/page/dashboard', 'layout' => 'main'],
            ],
            [
                'label' => \Yii::t('app', '<i class="fa fa-circle-o"></i> Dashboard v2'),
                'url' => ['/adminlte/page/dashboard', 'layout' => 'main2']
            ]
        ]
    ],
    [
        'label' => '<i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            ['url' => ['/adminlte/page/top-navigation'], 'label' => '<i class="fa fa-circle-o"></i> Top Navigation'],
            ['url' => ['/adminlte/page/layout-boxed'], 'label' => '<i class="fa fa-circle-o"></i> Boxed'],
            ['url' => ['/adminlte/page/layout-fixed'], 'label' => '<i class="fa fa-circle-o"></i> Fixed'],
            ['url' => ['/adminlte/page/layout-collapsed-sidebar'], 'label' => '<i class="fa fa-circle-o"></i> Collapsed Sidebar'],
        ]
    ],
    [
        'label' => '<i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>',
        'url' => ['/adminlte/page/widgets']
    ],
    [
        'label' => ' <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            ['url' => ['/adminlte/page/chart-chartjs'], 'label' => '<i class="fa fa-circle-o"></i> ChartJS'],
            ['url' => ['/adminlte/page/chart-morris'], 'label' => '<i class="fa fa-circle-o"></i> Morris'],
            ['url' => ['/adminlte/page/chart-flot'], 'label' => '<i class="fa fa-circle-o"></i> Flot'],
            ['url' => ['/adminlte/page/chart-inline'], 'label' => '<i class="fa fa-circle-o"></i> Inline charts'],
        ]
    ],
    [
        'label' => ' <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            ['url' => ['/adminlte/page/ui-general'], 'label' => '<i class="fa fa-circle-o"></i> General'],
            ['url' => ['/adminlte/page/ui-icons'], 'label' => '<i class="fa fa-circle-o"></i> Icons'],
            ['url' => ['/adminlte/page/ui-buttons'], 'label' => '<i class="fa fa-circle-o"></i> Buttons'],
            ['url' => ['/adminlte/page/ui-sliders'], 'label' => '<i class="fa fa-circle-o"></i> Sliders'],
            ['url' => ['/adminlte/page/ui-timeline'], 'label' => '<i class="fa fa-circle-o"></i> Timeline'],
            ['url' => ['/adminlte/page/ui-modals'], 'label' => '<i class="fa fa-circle-o"></i> Modals'],
        ]
    ],
    [
        'label' => ' <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            ['url' => ['/adminlte/page/form-general'], 'label' => '<i class="fa fa-circle-o"></i> General Elements'],
            ['url' => ['/adminlte/page/form-advanced'], 'label' => '<i class="fa fa-circle-o"></i> Advanced Elements'],
            ['url' => ['/adminlte/page/form-editors'], 'label' => '<i class="fa fa-circle-o"></i> Editors'],
        ]
    ],
    [
        'label' => ' <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            ['url' => ['/adminlte/page/table-simple'], 'label' => '<i class="fa fa-circle-o"></i> Simple tables'],
            ['url' => ['/adminlte/page/table-data'], 'label' => '<i class="fa fa-circle-o"></i> Data tables'],
        ]
    ],
    [
        'label' => ' <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>',
        'url' => ['/adminlte/page/calendar']
    ],
    [
        'label' => ' <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>',
        'url' => ['/adminlte/page/mailbox-mailbox']
    ],
    [
        'label' => ' <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            ['url' => ['/adminlte/page/example-invoice'], 'label' => '<i class="fa fa-circle-o"></i> Invoice'],
            ['url' => ['/adminlte/page/example-profile'], 'label' => '<i class="fa fa-circle-o"></i> Profile'],
            ['url' => ['/adminlte/page/example-login'], 'label' => '<i class="fa fa-circle-o"></i> Login'],
            ['url' => ['/adminlte/page/example-register'], 'label' => '<i class="fa fa-circle-o"></i> Register'],
            ['url' => ['/adminlte/page/example-lockscreen'], 'label' => '<i class="fa fa-circle-o"></i> Lockscreen'],
            ['url' => ['/adminlte/page/example-404'], 'label' => '<i class="fa fa-circle-o"></i> 404 Error'],
            ['url' => ['/adminlte/page/example-500'], 'label' => '<i class="fa fa-circle-o"></i> 500 Error'],
            ['url' => ['/adminlte/page/example-blank'], 'label' => '<i class="fa fa-circle-o"></i> Blank Page'],
            ['url' => ['/adminlte/page/example-pace'], 'label' => '<i class="fa fa-circle-o"></i> Pace Page'],
        ]
    ],
    [
        'label' => ' <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>',
        'url' => '#',
        'options' => [
            'class' => 'treeview'
        ],
        'items' => [
            [
                'label' => '<i class="fa fa-circle-o"></i> Level One</a>',
                'url' => '#'
            ],
            [
                'label' => '<i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>',
                'url' => '#',
                'options' => [
                    'class' => 'treeview'
                ],
                'items' => [
                    [
                        'label' => '<i class="fa fa-circle-o"></i> Level Two</a>',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => '<i class="fa fa-circle-o"></i> Level Three</a>',
                                'url' => '#'
                            ],
                            [
                                'label' => '<i class="fa fa-circle-o"></i> Level Three</a>',
                                'url' => '#'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
