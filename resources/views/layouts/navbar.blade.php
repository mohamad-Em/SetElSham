<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        <div class="header-search">

        </div>
    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="vendors/images/photo1.jpg" alt="">
                    </span>
                    <span class="user-name">{{ Auth('admin')->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
        <div class="github-link">
            <a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
        </div>
    </div>
</div>
