@extends('layouts.app_admin')

@section('content')
{{--    <div class="wrapper row-offcanvas row-offcanvas-left">--}}
{{--        <!-- Left side column. contains the logo and sidebar -->--}}
{{--        <aside class="left-side sidebar-offcanvas">--}}
{{--            <!-- sidebar: style can be found in sidebar.less -->--}}
{{--            <section class="sidebar">--}}
{{--                <!-- Sidebar user panel -->--}}
{{--                <div class="user-panel">--}}
{{--                    <div class="pull-left image">--}}
{{--                        <img src="img/avatar3.png" class="img-circle" alt="User Image" />--}}
{{--                    </div>--}}
{{--                    <div class="pull-left info">--}}
{{--                        <p>Hello, {{ Auth::user()->name }}</p>--}}

{{--                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- search form -->--}}
{{--                <form action="#" method="get" class="sidebar-form">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" name="q" class="form-control" placeholder="Search..."/>--}}
{{--                        <span class="input-group-btn">--}}
{{--                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
{{--                            </span>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <!-- /.search form -->--}}
{{--                <!-- sidebar menu: : style can be found in sidebar.less -->--}}
{{--                <ul class="sidebar-menu">--}}
{{--                    <li class="active">--}}
{{--                        <a href="{{route('admin.dashboard')}}">--}}
{{--                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="pages/widgets.html">--}}
{{--                            <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-bar-chart-o"></i>--}}
{{--                            <span>Brand</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="{{route('brand.create')}}"><i class="fa fa-angle-double-right"></i>Create Brand</a></li>--}}
{{--                            <li><a href="{{route('brand.index')}}"><i class="fa fa-angle-double-right"></i> Manage Brand</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-bar-chart-o"></i>--}}
{{--                            <span>Category</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="{{route('category.create')}}"><i class="fa fa-angle-double-right"></i>Create Category</a></li>--}}
{{--                            <li><a href="{{route('category.index')}}"><i class="fa fa-angle-double-right"></i> Manage Category</a></li>--}}
{{--                            <li><a href="{{route('subcategory.create')}}"><i class="fa fa-angle-double-right"></i>Create Sub Category</a></li>--}}
{{--                            <li><a href="{{route('subcategory.index')}}"><i class="fa fa-angle-double-right"></i> Manage Sub Category</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-bar-chart-o"></i>--}}
{{--                            <span>Products</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="{{route('product.create')}}"><i class="fa fa-angle-double-right"></i>Add Product</a></li>--}}
{{--                            <li><a href="{{route('product.index')}}"><i class="fa fa-angle-double-right"></i> Manage Product</a></li>--}}
{{--                            <li><a href="{{route('productImage.create')}}"><i class="fa fa-angle-double-right"></i>Add Product Image</a></li>--}}
{{--                            <li><a href="{{route('productImage.index')}}"><i class="fa fa-angle-double-right"></i> Manage Product Image</a></li>--}}
{{--                            <li><a href="{{route('productVideo.create')}}"><i class="fa fa-angle-double-right"></i>Add Product Video</a></li>--}}
{{--                            <li><a href="{{route('productVideo.index')}}"><i class="fa fa-angle-double-right"></i> Manage Product Video</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-bar-chart-o"></i>--}}
{{--                            <span>Coupon</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="{{route('coupon.create')}}"><i class="fa fa-angle-double-right"></i>Create Coupon</a></li>--}}
{{--                            <li><a href="{{route('coupon.index')}}"><i class="fa fa-angle-double-right"></i> Manage Coupon</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-laptop"></i>--}}
{{--                            <span>UI Elements</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>--}}
{{--                            <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>--}}
{{--                            <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>--}}
{{--                            <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>--}}
{{--                            <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-edit"></i> <span>Forms</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>--}}
{{--                            <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>--}}
{{--                            <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-table"></i> <span>Tables</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>--}}
{{--                            <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="pages/calendar.html">--}}
{{--                            <i class="fa fa-calendar"></i> <span>Calendar</span>--}}
{{--                            <small class="badge pull-right bg-red">3</small>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="pages/mailbox.html">--}}
{{--                            <i class="fa fa-envelope"></i> <span>Mailbox</span>--}}
{{--                            <small class="badge pull-right bg-yellow">12</small>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="treeview">--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-folder"></i> <span>Examples</span>--}}
{{--                            <i class="fa fa-angle-left pull-right"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="treeview-menu">--}}
{{--                            <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>--}}
{{--                            <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>--}}
{{--                            <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>--}}
{{--                            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>--}}
{{--                            <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>--}}
{{--                            <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>--}}
{{--                            <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </section>--}}
{{--            <!-- /.sidebar -->--}}
{{--        </aside>--}}

{{--        <!-- Right side column. Contains the navbar and content of the page -->--}}
{{--        <aside class="right-side">--}}
{{--            <!-- Content Header (Page header) -->--}}
{{--            <section class="content-header">--}}
{{--                <h1>--}}
{{--                    Dashboard--}}
{{--                    <small>Control panel</small>--}}
{{--                </h1>--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--                    <li class="active">Dashboard</li>--}}
{{--                </ol>--}}
{{--            </section>--}}

{{--            <!-- Main content -->--}}
{{--            <section class="content">--}}

{{--                <!-- Small boxes (Stat box) -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-xs-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-aqua">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>--}}
{{--                                    150--}}
{{--                                </h3>--}}
{{--                                <p>--}}
{{--                                    New Orders--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-bag"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">--}}
{{--                                More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div><!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-xs-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-green">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>--}}
{{--                                    53<sup style="font-size: 20px">%</sup>--}}
{{--                                </h3>--}}
{{--                                <p>--}}
{{--                                    Bounce Rate--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-stats-bars"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">--}}
{{--                                More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div><!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-xs-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-yellow">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>--}}
{{--                                    44--}}
{{--                                </h3>--}}
{{--                                <p>--}}
{{--                                    User Registrations--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-person-add"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">--}}
{{--                                More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div><!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-xs-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-red">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>--}}
{{--                                    65--}}
{{--                                </h3>--}}
{{--                                <p>--}}
{{--                                    Unique Visitors--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-pie-graph"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">--}}
{{--                                More info <i class="fa fa-arrow-circle-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div><!-- ./col -->--}}
{{--                </div><!-- /.row -->--}}

{{--                <!-- top row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-12 connectedSortable">--}}

{{--                    </div><!-- /.col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}

{{--                <!-- Main row -->--}}
{{--                <div class="row">--}}
{{--                    <!-- Left col -->--}}
{{--                    <section class="col-lg-6 connectedSortable">--}}
{{--                        <!-- Box (with bar chart) -->--}}
{{--                        <div class="box box-danger" id="loading-example">--}}
{{--                            <div class="box-header">--}}
{{--                                <!-- tools box -->--}}
{{--                                <div class="pull-right box-tools">--}}
{{--                                    <button class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button>--}}
{{--                                    <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>--}}
{{--                                    <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>--}}
{{--                                </div><!-- /. tools -->--}}
{{--                                <i class="fa fa-cloud"></i>--}}

{{--                                <h3 class="box-title">Server Load</h3>--}}
{{--                            </div><!-- /.box-header -->--}}
{{--                            <div class="box-body no-padding">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-7">--}}
{{--                                        <!-- bar chart -->--}}
{{--                                        <div class="chart" id="bar-chart" style="height: 250px;"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-5">--}}
{{--                                        <div class="pad">--}}
{{--                                            <!-- Progress bars -->--}}
{{--                                            <div class="clearfix">--}}
{{--                                                <span class="pull-left">Bandwidth</span>--}}
{{--                                                <small class="pull-right">10/200 GB</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress xs">--}}
{{--                                                <div class="progress-bar progress-bar-green" style="width: 70%;"></div>--}}
{{--                                            </div>--}}

{{--                                            <div class="clearfix">--}}
{{--                                                <span class="pull-left">Transfered</span>--}}
{{--                                                <small class="pull-right">10 GB</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress xs">--}}
{{--                                                <div class="progress-bar progress-bar-red" style="width: 70%;"></div>--}}
{{--                                            </div>--}}

{{--                                            <div class="clearfix">--}}
{{--                                                <span class="pull-left">Activity</span>--}}
{{--                                                <small class="pull-right">73%</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress xs">--}}
{{--                                                <div class="progress-bar progress-bar-light-blue" style="width: 70%;"></div>--}}
{{--                                            </div>--}}

{{--                                            <div class="clearfix">--}}
{{--                                                <span class="pull-left">FTP</span>--}}
{{--                                                <small class="pull-right">30 GB</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress xs">--}}
{{--                                                <div class="progress-bar progress-bar-aqua" style="width: 70%;"></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Buttons -->--}}
{{--                                            <p>--}}
{{--                                                <button class="btn btn-default btn-sm"><i class="fa fa-cloud-download"></i> Generate PDF</button>--}}
{{--                                            </p>--}}
{{--                                        </div><!-- /.pad -->--}}
{{--                                    </div><!-- /.col -->--}}
{{--                                </div><!-- /.row - inside box -->--}}
{{--                            </div><!-- /.box-body -->--}}
{{--                            <div class="box-footer">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="80" data-width="60" data-height="60" data-fgColor="#f56954"/>--}}
{{--                                        <div class="knob-label">CPU</div>--}}
{{--                                    </div><!-- ./col -->--}}
{{--                                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#00a65a"/>--}}
{{--                                        <div class="knob-label">Disk</div>--}}
{{--                                    </div><!-- ./col -->--}}
{{--                                    <div class="col-xs-4 text-center">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#3c8dbc"/>--}}
{{--                                        <div class="knob-label">RAM</div>--}}
{{--                                    </div><!-- ./col -->--}}
{{--                                </div><!-- /.row -->--}}
{{--                            </div><!-- /.box-footer -->--}}
{{--                        </div><!-- /.box -->--}}

{{--                        <!-- Custom tabs (Charts with tabs)-->--}}
{{--                        <div class="nav-tabs-custom">--}}
{{--                            <!-- Tabs within a box -->--}}
{{--                            <ul class="nav nav-tabs pull-right">--}}
{{--                                <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>--}}
{{--                                <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>--}}
{{--                                <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>--}}
{{--                            </ul>--}}
{{--                            <div class="tab-content no-padding">--}}
{{--                                <!-- Morris chart - Sales -->--}}
{{--                                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>--}}
{{--                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.nav-tabs-custom -->--}}

{{--                        <!-- Calendar -->--}}
{{--                        <div class="box box-warning">--}}
{{--                            <div class="box-header">--}}
{{--                                <i class="fa fa-calendar"></i>--}}
{{--                                <div class="box-title">Calendar</div>--}}

{{--                                <!-- tools box -->--}}
{{--                                <div class="pull-right box-tools">--}}
{{--                                    <!-- button with a dropdown -->--}}
{{--                                    <div class="btn-group">--}}
{{--                                        <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>--}}
{{--                                        <ul class="dropdown-menu pull-right" role="menu">--}}
{{--                                            <li><a href="#">Add new event</a></li>--}}
{{--                                            <li><a href="#">Clear events</a></li>--}}
{{--                                            <li class="divider"></li>--}}
{{--                                            <li><a href="#">View calendar</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /. tools -->--}}
{{--                            </div><!-- /.box-header -->--}}
{{--                            <div class="box-body no-padding">--}}
{{--                                <!--The calendar -->--}}
{{--                                <div id="calendar"></div>--}}
{{--                            </div><!-- /.box-body -->--}}
{{--                        </div><!-- /.box -->--}}

{{--                        <!-- quick email widget -->--}}
{{--                        <div class="box box-info">--}}
{{--                            <div class="box-header">--}}
{{--                                <i class="fa fa-envelope"></i>--}}
{{--                                <h3 class="box-title">Quick Email</h3>--}}
{{--                                <!-- tools box -->--}}
{{--                                <div class="pull-right box-tools">--}}
{{--                                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>--}}
{{--                                </div><!-- /. tools -->--}}
{{--                            </div>--}}
{{--                            <div class="box-body">--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" name="subject" placeholder="Subject"/>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="box-footer clearfix">--}}
{{--                                <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </section><!-- /.Left col -->--}}
{{--                    <!-- right col (We are only adding the ID to make the widgets sortable)-->--}}
{{--                    <section class="col-lg-6 connectedSortable">--}}
{{--                        <!-- Map box -->--}}
{{--                        <div class="box box-primary">--}}
{{--                            <div class="box-header">--}}
{{--                                <!-- tools box -->--}}
{{--                                <div class="pull-right box-tools">--}}
{{--                                    <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>--}}
{{--                                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>--}}
{{--                                </div><!-- /. tools -->--}}

{{--                                <i class="fa fa-map-marker"></i>--}}
{{--                                <h3 class="box-title">--}}
{{--                                    Visitors--}}
{{--                                </h3>--}}
{{--                            </div>--}}
{{--                            <div class="box-body no-padding">--}}
{{--                                <div id="world-map" style="height: 300px;"></div>--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <!-- .table - Uses sparkline charts-->--}}
{{--                                    <table class="table table-striped">--}}
{{--                                        <tr>--}}
{{--                                            <th>Country</th>--}}
{{--                                            <th>Visitors</th>--}}
{{--                                            <th>Online</th>--}}
{{--                                            <th>Page Views</th>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><a href="#">USA</a></td>--}}
{{--                                            <td><div id="sparkline-1"></div></td>--}}
{{--                                            <td>209</td>--}}
{{--                                            <td>239</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><a href="#">India</a></td>--}}
{{--                                            <td><div id="sparkline-2"></div></td>--}}
{{--                                            <td>131</td>--}}
{{--                                            <td>958</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><a href="#">Britain</a></td>--}}
{{--                                            <td><div id="sparkline-3"></div></td>--}}
{{--                                            <td>19</td>--}}
{{--                                            <td>417</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><a href="#">Brazil</a></td>--}}
{{--                                            <td><div id="sparkline-4"></div></td>--}}
{{--                                            <td>109</td>--}}
{{--                                            <td>476</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><a href="#">China</a></td>--}}
{{--                                            <td><div id="sparkline-5"></div></td>--}}
{{--                                            <td>192</td>--}}
{{--                                            <td>437</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><a href="#">Australia</a></td>--}}
{{--                                            <td><div id="sparkline-6"></div></td>--}}
{{--                                            <td>1709</td>--}}
{{--                                            <td>947</td>--}}
{{--                                        </tr>--}}
{{--                                    </table><!-- /.table -->--}}
{{--                                </div>--}}
{{--                            </div><!-- /.box-body-->--}}
{{--                            <div class="box-footer">--}}
{{--                                <button class="btn btn-info"><i class="fa fa-download"></i> Generate PDF</button>--}}
{{--                                <button class="btn btn-warning"><i class="fa fa-bug"></i> Report Bug</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.box -->--}}

{{--                        <!-- Chat box -->--}}
{{--                        <div class="box box-success">--}}
{{--                            <div class="box-header">--}}
{{--                                <h3 class="box-title"><i class="fa fa-comments-o"></i> Chat</h3>--}}
{{--                                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">--}}
{{--                                    <div class="btn-group" data-toggle="btn-toggle" >--}}
{{--                                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>--}}
{{--                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="box-body chat" id="chat-box">--}}
{{--                                <!-- chat item -->--}}
{{--                                <div class="item">--}}
{{--                                    <img src="img/avatar.png" alt="user image" class="online"/>--}}
{{--                                    <p class="message">--}}
{{--                                        <a href="#" class="name">--}}
{{--                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>--}}
{{--                                            Mike Doe--}}
{{--                                        </a>--}}
{{--                                        I would like to meet you to discuss the latest news about--}}
{{--                                        the arrival of the new theme. They say it is going to be one the--}}
{{--                                        best themes on the market--}}
{{--                                    </p>--}}
{{--                                    <div class="attachment">--}}
{{--                                        <h4>Attachments:</h4>--}}
{{--                                        <p class="filename">--}}
{{--                                            Theme-thumbnail-image.jpg--}}
{{--                                        </p>--}}
{{--                                        <div class="pull-right">--}}
{{--                                            <button class="btn btn-primary btn-sm btn-flat">Open</button>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- /.attachment -->--}}
{{--                                </div><!-- /.item -->--}}
{{--                                <!-- chat item -->--}}
{{--                                <div class="item">--}}
{{--                                    <img src="img/avatar2.png" alt="user image" class="offline"/>--}}
{{--                                    <p class="message">--}}
{{--                                        <a href="#" class="name">--}}
{{--                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>--}}
{{--                                            Jane Doe--}}
{{--                                        </a>--}}
{{--                                        I would like to meet you to discuss the latest news about--}}
{{--                                        the arrival of the new theme. They say it is going to be one the--}}
{{--                                        best themes on the market--}}
{{--                                    </p>--}}
{{--                                </div><!-- /.item -->--}}
{{--                                <!-- chat item -->--}}
{{--                                <div class="item">--}}
{{--                                    <img src="img/avatar3.png" alt="user image" class="offline"/>--}}
{{--                                    <p class="message">--}}
{{--                                        <a href="#" class="name">--}}
{{--                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>--}}
{{--                                            Susan Doe--}}
{{--                                        </a>--}}
{{--                                        I would like to meet you to discuss the latest news about--}}
{{--                                        the arrival of the new theme. They say it is going to be one the--}}
{{--                                        best themes on the market--}}
{{--                                    </p>--}}
{{--                                </div><!-- /.item -->--}}
{{--                            </div><!-- /.chat -->--}}
{{--                            <div class="box-footer">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input class="form-control" placeholder="Type message..."/>--}}
{{--                                    <div class="input-group-btn">--}}
{{--                                        <button class="btn btn-success"><i class="fa fa-plus"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.box (chat box) -->--}}

{{--                        <!-- TO DO List -->--}}
{{--                        <div class="box box-primary">--}}
{{--                            <div class="box-header">--}}
{{--                                <i class="ion ion-clipboard"></i>--}}
{{--                                <h3 class="box-title">To Do List</h3>--}}
{{--                                <div class="box-tools pull-right">--}}
{{--                                    <ul class="pagination pagination-sm inline">--}}
{{--                                        <li><a href="#">&laquo;</a></li>--}}
{{--                                        <li><a href="#">1</a></li>--}}
{{--                                        <li><a href="#">2</a></li>--}}
{{--                                        <li><a href="#">3</a></li>--}}
{{--                                        <li><a href="#">&raquo;</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div><!-- /.box-header -->--}}
{{--                            <div class="box-body">--}}
{{--                                <ul class="todo-list">--}}
{{--                                    <li>--}}
{{--                                        <!-- drag handle -->--}}
{{--                                        <span class="handle">--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                            </span>--}}
{{--                                        <!-- checkbox -->--}}
{{--                                        <input type="checkbox" value="" name=""/>--}}
{{--                                        <!-- todo text -->--}}
{{--                                        <span class="text">Design a nice theme</span>--}}
{{--                                        <!-- Emphasis label -->--}}
{{--                                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>--}}
{{--                                        <!-- General tools such as edit or delete-->--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                            <i class="fa fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                            <span class="handle">--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                            </span>--}}
{{--                                        <input type="checkbox" value="" name=""/>--}}
{{--                                        <span class="text">Make the theme responsive</span>--}}
{{--                                        <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                            <i class="fa fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                            <span class="handle">--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                            </span>--}}
{{--                                        <input type="checkbox" value="" name=""/>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                            <i class="fa fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                            <span class="handle">--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                            </span>--}}
{{--                                        <input type="checkbox" value="" name=""/>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                            <i class="fa fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                            <span class="handle">--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                            </span>--}}
{{--                                        <input type="checkbox" value="" name=""/>--}}
{{--                                        <span class="text">Check your messages and notifications</span>--}}
{{--                                        <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                            <i class="fa fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                            <span class="handle">--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                                <i class="fa fa-ellipsis-v"></i>--}}
{{--                                            </span>--}}
{{--                                        <input type="checkbox" value="" name=""/>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                            <i class="fa fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- /.box-body -->--}}
{{--                            <div class="box-footer clearfix no-border">--}}
{{--                                <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.box -->--}}

{{--                    </section><!-- right col -->--}}
{{--                </div><!-- /.row (main row) -->--}}

{{--            </section><!-- /.content -->--}}
{{--        </aside><!-- /.right-side -->--}}
{{--    </div><!-- ./wrapper -->--}}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Total Users') }}</span>
                            <span class="info-box-number">
                  {{$allUsers->count()}}
{{--                  <small>%</small>--}}
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-handshake"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{__('Total Vendor')}}</span>
                            <span class="info-box-number">{{ $allVendors->count() }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Sales') }}</span>
                            <span class="info-box-number">{{ __('BDT ') . $totalWeekSale }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('New Members') }}</span>
                            <span class="info-box-number">{{ $usersThisMonth->count() }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Monthly Recap Report</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a class="dropdown-divider"></a>
                                        <a href="#" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Goal Completion</strong>
                                    </p>

                                    <div class="progress-group">
                                        Add Products to Cart
                                        <span class="float-right"><b>160</b>/200</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->

                                    <div class="progress-group">
                                        Complete Purchase
                                        <span class="float-right"><b>310</b>/400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 75%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Visit Premium Page</span>
                                        <span class="float-right"><b>480</b>/800</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 60%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        Send Inquiries
                                        <span class="float-right"><b>250</b>/500</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">$35,210.43</h5>
                                        <span class="description-text">TOTAL REVENUE</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header">$10,390.90</h5>
                                        <span class="description-text">TOTAL COST</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">$24,813.53</h5>
                                        <span class="description-text">TOTAL PROFIT</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">GOAL COMPLETIONS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                    <!-- MAP & BOX PANE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">US-Visitors Report</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="d-md-flex">
                                <div class="p-1 flex-fill" style="overflow: hidden">
                                    <!-- Map will be created here -->
                                    <div id="world-map-markers" style="height: 325px; overflow: hidden">
                                        <div class="map"></div>
                                    </div>
                                </div>
                                <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                                    <div class="description-block mb-4">
                                        <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                        <h5 class="description-header">8390</h5>
                                        <span class="description-text">Visits</span>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="description-block mb-4">
                                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                        <h5 class="description-header">30%</h5>
                                        <span class="description-text">Referrals</span>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="description-block">
                                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                        <h5 class="description-header">70%</h5>
                                        <span class="description-text">Organic</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div><!-- /.card-pane-right -->
                            </div><!-- /.d-md-flex -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Direct Chat</h3>

                                    <div class="card-tools">
                                        <span title="3 New Messages" class="badge badge-warning">3</span>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                Is this template really for free? That's unbelievable!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                You better believe it!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                Working with AdminLTE on a great new app! Wanna join?
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                I would love to.
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                    </div>
                                    <!--/.direct-chat-messages-->

                                    <!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                                                    <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Count Dracula
                                <small class="contacts-list-date float-right">2/28/2015</small>
                              </span>
                                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                                                    <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Sarah Doe
                                <small class="contacts-list-date float-right">2/23/2015</small>
                              </span>
                                                        <span class="contacts-list-msg">I will be waiting for...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                                                    <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Nadia Jolie
                                <small class="contacts-list-date float-right">2/20/2015</small>
                              </span>
                                                        <span class="contacts-list-msg">I'll call you back at...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                                                    <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Nora S. Vans
                                <small class="contacts-list-date float-right">2/10/2015</small>
                              </span>
                                                        <span class="contacts-list-msg">Where is your new...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                                                    <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                John K.
                                <small class="contacts-list-date float-right">1/27/2015</small>
                              </span>
                                                        <span class="contacts-list-msg">Can I take a look at...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                                                    <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Kenneth M.
                                <small class="contacts-list-date float-right">1/4/2015</small>
                              </span>
                                                        <span class="contacts-list-msg">Never mind I found...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                        </ul>
                                        <!-- /.contacts-list -->
                                    </div>
                                    <!-- /.direct-chat-pane -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                            <span class="input-group-append">
                          <button type="button" class="btn btn-warning">Send</button>
                        </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!--/.direct-chat -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <!-- USERS LIST -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Latest Members</h3>

                                    <div class="card-tools">
                                        <span class="badge badge-danger">8 New Members</span>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <ul class="users-list clearfix">
                                        <li>
                                            <img src="dist/img/user1-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Alexander Pierce</a>
                                            <span class="users-list-date">Today</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user8-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Norman</a>
                                            <span class="users-list-date">Yesterday</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Jane</a>
                                            <span class="users-list-date">12 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user6-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">John</a>
                                            <span class="users-list-date">12 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user2-160x160.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Alexander</a>
                                            <span class="users-list-date">13 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user5-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Sarah</a>
                                            <span class="users-list-date">14 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user4-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Nora</a>
                                            <span class="users-list-date">15 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user3-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Nadia</a>
                                            <span class="users-list-date">15 Jan</span>
                                        </li>
                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    <a href="javascript:">View All Users</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Orders</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                        <th>Popularity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>Call of Duty IV</td>
                                        <td><span class="badge badge-success">Shipped</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>iPhone 6 Plus</td>
                                        <td><span class="badge badge-danger">Delivered</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="badge badge-info">Processing</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>iPhone 6 Plus</td>
                                        <td><span class="badge badge-danger">Delivered</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>Call of Duty IV</td>
                                        <td><span class="badge badge-success">Shipped</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box mb-3 bg-warning">
                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Inventory</span>
                            <span class="info-box-number">5,200</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box mb-3 bg-success">
                        <span class="info-box-icon"><i class="far fa-heart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Mentions</span>
                            <span class="info-box-number">92,050</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box mb-3 bg-danger">
                        <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Downloads</span>
                            <span class="info-box-number">114,381</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box mb-3 bg-info">
                        <span class="info-box-icon"><i class="far fa-comment"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Direct Messages</span>
                            <span class="info-box-number">163,921</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Browser Usage</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="150"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                        <li><i class="far fa-circle text-success"></i> IE</li>
                                        <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                        <li><i class="far fa-circle text-info"></i> Safari</li>
                                        <li><i class="far fa-circle text-primary"></i> Opera</li>
                                        <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-light p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        United States of America
                                        <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        India
                                        <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        China
                                        <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.footer -->
                    </div>
                    <!-- /.card -->

                    <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Products</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Samsung TV
                                            <span class="badge badge-warning float-right">$1800</span></a>
                                        <span class="product-description">
                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                      </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Bicycle
                                            <span class="badge badge-info float-right">$700</span></a>
                                        <span class="product-description">
                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">
                                            Xbox One <span class="badge badge-danger float-right">
                        $350
                      </span>
                                        </a>
                                        <span class="product-description">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">PlayStation 4
                                            <span class="badge badge-success float-right">$399</span></a>
                                        <span class="product-description">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection
