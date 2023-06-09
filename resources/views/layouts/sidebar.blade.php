<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('admin.home') }}" class="dropdown-toggle no-arrow">
                        <span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.corners') }}" class="dropdown-toggle no-arrow">
                        <span class="mtext">Corner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.offers') }}" class="dropdown-toggle no-arrow">
                        <span class="mtext">Offers</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
