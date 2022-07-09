 <!-- Navigation Bar-->
 <header id="topnav">
    <!-- end topbar-main -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="{{route('userIndex')}}"><i class="fa fa-user-circle"></i> <span> Users </span> </a>
                    </li>
                    <li class=" pull-right">
                        <a class="pull-right" href="{{route('logout')}}">Logout {{Auth::user()->name}}</a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
            <div>
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->