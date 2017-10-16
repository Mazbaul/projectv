<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" xmlns="http://www.w3.org/1999/html">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
      <!--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ url('/admin') }}"> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="{{ Request::path() == 'admin/notice' ? "active" : "" }}"><a href="{{ url('/admin/notice') }}"><span>Notices</span></a></li>
            <li class="{{ Request::path() == 'admin/users' ? "active" : "" }}"><a href="{{ url('/admin/users') }}"><span>Students</span></a></li>
            <li class="{{ Request::path() == 'admin/registration/request' ? "active" : "" }}"><a href="{{ url('/admin/registration/request') }}"><span>Student Request </span><span class="{{ !(App\User::where('status', '=' ,'0')->count())? "" : "label label-warning"}}">{{ !(App\User::where('status', '=' ,'0')->count())? "" : (App\User::where('status', '=' ,'0')->count())}}</span></a></li>
            <li class="{{ Request::path() == 'admin/departments/create' ? "active" : "" }}"><a href="{{route('departments.create')}}"><span>Department Entry</span></a></li>
            <li class="{{ Request::path() == 'admin/users/create' ? "active" : "" }}"><a href="{{route('users.create')}}"><span>Student Entry</span></a></li>
            <li class="{{ Request::path() == 'admin/courses' ? "active" : "" }}"><a href="{{route('courses.index')}}"><span>Course Entry</span></a></li>
            <li class="{{ Request::path() == 'admin/registered' ? "active" : "" }}"><a href="{{ url('/admin/registered') }}"><span>Registered Students Regular </span><span class="{{ !(App\Registered::where('status', '=' ,'0')->count())? "" : "label label-warning"}}">{{ !(App\Registered::where('status', '=' ,'0')->count())? "" : (App\Registered::where('status', '=' ,'0')->count())}}</span></a></li>
            <li class="{{ Request::path() == 'admin/registered/backlog' ? "active" : "" }}"><a href="{{ url('/admin/registered/backlog') }}"><span>Registered Students Backlog</span></a></li>
            <li class="{{ Request::path() == 'admin/certificateapp/show' ? "active" : "" }}"><a href="{{ url('/admin/certificateapp/show') }}"><span>Application for Certificates </span><span class="{{ !(App\Applicantinfo::where('status', '=' ,'0')->count())? "" : "label label-warning"}}">{{ !(App\Applicantinfo::where('status', '=' ,'0')->count())? "" : (App\Applicantinfo::where('status', '=' ,'0')->count())}}</span></a></li>

        <!-- <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li> -->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
