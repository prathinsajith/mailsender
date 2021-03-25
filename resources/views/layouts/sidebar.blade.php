<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
        data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-section">
                <h4 class="menu-text">Navigation</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ url('/home') }}" class="menu-link menu-toggle">
                    <i class="menu-icon fas fa-house-user   "></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{ url('/mailentry') }}" class="menu-link menu-toggle">
                    <i class="menu-icon fa fa-envelope-open "></i>
                    <span class="menu-text">Mail</span>
                </a>
            </li>
        </ul>
        <!--end::Menu Nav-->
    </div>
</div>
