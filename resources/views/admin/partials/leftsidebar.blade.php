<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{!! Auth::user()->present()->fullName() !!}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{!! route('admin.dashboard.index') !!}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li>
                <a href="{!! route('admin.product.index') !!}">
                    <i class="fa fa-group"></i> <span>Products</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{!! route('admin.category.index') !!}">
                    <i class="fa fa-group"></i> <span>Categories</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li>
                <a href="{!! route('admin.user.index') !!}">
                    <i class="fa fa-group"></i> <span>Users</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li>
                <a href="{!! route('admin.role.index') !!}">
                    <i class="fa fa-group"></i> <span>Roles</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li>
                <a href="{!! route('admin.customer.index') !!}">
                    <i class="fa fa-group"></i> <span>Inbox</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li>
                <a href="{!! route('admin.permission.index') !!}">
                    <i class="fa fa-group"></i> <span>Permissions</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>