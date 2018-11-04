<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="/admin/dashboard"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="#products" data-toggle="collapse" class="collapsed"><i class="lnr lnr-eye"></i> <span>Listings</span>
                        <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="products" class="collapse ">
                        <ul class="nav">
                            <li><a href="/admin/listing/create" class="">Create Listing</a></li>
                            <li><a href="/admin/listing/all" class="">All Listing</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/admin/category/create" class=""><i class="lnr lnr-home"></i> <span>Category</span></a></li>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->