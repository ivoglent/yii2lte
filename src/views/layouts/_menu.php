<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 4/10/18
 * Time: 3:19 PM
 */
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview menu-open">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="<?=\yii\helpers\Url::to(['/adminlte/page/dashboard', 'layout' => 'main'])?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li ><a href="<?=\yii\helpers\Url::to(['/adminlte/page/dashboard', 'layout' => 'main2'])?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/top-navigation'])?>"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/layout-boxed'])?>"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/layout-fixed'])?>"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/layout-collapsed-sidebar'])?>"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['/adminlte/page/widgets'])?>">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/chart-chartjs'])?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/chart-morris'])?>"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/chart-flot'])?>"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/chart-inline'])?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/ui-general'])?>"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/ui-icons'])?>"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/ui-buttons'])?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/ui-sliders'])?>"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/ui-timeline'])?>"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/ui-modals'])?>"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/form-general'])?>"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/form-advanced'])?>"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/form-editors'])?>"><i class="fa fa-circle-o"></i> Editors</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/table-simple'])?>"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/table-data'])?>"><i class="fa fa-circle-o"></i> Data tables</a></li>
        </ul>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['/adminlte/page/calendar'])?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
        </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['/adminlte/page/mailbox-mailbox'])?>">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-invoice'])?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-profile'])?>"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-login'])?>"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-register'])?>"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-lockscreen'])?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-404'])?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-500'])?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-blank'])?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page/example-pace'])?>"><i class="fa fa-circle-o"></i> Pace Page</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Level Two
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
    </li>
    <li><a href="<?=\yii\helpers\Url::to(['/adminlte/page//adminlte.io/docs'])?>"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
</ul>
