<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <li class="nav-item start ">
            <a href="{{route('admin.home')}}" class="nav-link nav-toggle">
                <i class="fa fa-shopping-cart"></i>
                <span class="title">Dashboard</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item start ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-shopping-cart"></i>
                <span class="title">Service</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('Services.index')}}" class="nav-link ">
                        <i class="fa fa-circle"></i>
                        <span class="title">Show</span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{route('Services.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">Add</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item start ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-user"></i>
                <span class="title">User</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{url('/controlpanel/users')}}" class="nav-link ">
                        <i class="fa fa-circle"></i>
                        <span class="title">Show</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item start ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-user"></i>
                <span class="title">Appointment</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('appointments.index')}}" class="nav-link ">
                        <i class="fa fa-circle"></i>
                        <span class="title">Show</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
    </ul>
</div>
