@extends('layouts.app_admin')

@section('content')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Hello</p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
{{--                <form action="#" method="get" class="sidebar-form">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" name="q" class="form-control" placeholder="Search..."/>--}}
{{--                        <span class="input-group-btn">--}}
{{--                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
{{--                            </span>--}}
{{--                    </div>--}}
{{--                </form>--}}
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/widgets.html">
                            <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Brand</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('brand.create')}}"><i class="fa fa-angle-double-right"></i>Create Brand</a></li>
                            <li><a href="{{route('brand.index')}}"><i class="fa fa-angle-double-right"></i> Manage Brand</a></li>
                           
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Category</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('category.create')}}"><i class="fa fa-angle-double-right"></i>Create Category</a></li>
                            <li><a href="{{route('category.index')}}"><i class="fa fa-angle-double-right"></i> Manage Category</a></li>
                           
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Copon</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('category.create')}}"><i class="fa fa-angle-double-right"></i>Create Copon</a></li>
                            <li><a href="{{route('category.index')}}"><i class="fa fa-angle-double-right"></i> Manage Copon</a></li>
                           
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>UI Elements</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                            <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                            <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                            <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                            <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Forms</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                            <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Tables</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/calendar.html">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <small class="badge pull-right bg-red">3</small>
                        </a>
                    </li>
                    <li>
                        <a href="pages/mailbox.html">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <small class="badge pull-right bg-yellow">12</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                            <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                            <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                            <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                            <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                            <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
          

            <!-- Main content -->
            <section class="content">
              
            	<div class="row">
            		<div class="col-md-12">
                            <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Update Category</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('category.update',$categorys->id)}}" method="POST">
                            @csrf
                        <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" value="{{$categorys->category_name}}" placeholder="Brand Name">
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Status</label>
                                    <select name="status" id="" class="form-control">
                                    <option value="1" @if($categorys->status == 1 ) selected @endif>Active</option>
                                        <option value="0" @if($categorys->status == 0 ) selected @endif>InActive</option>
                                    </select>
                                </div>                 
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save Change</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                  </div>
            	</div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
@endsection
