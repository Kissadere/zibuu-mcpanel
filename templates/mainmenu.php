    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="dashboard"><img src="../assets/images/icon.svg" alt="Zibuu Entertainment" class="img-fluid logo"><span>Zibuu</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="https://minotar.net/avatar/<?php echo $_SESSION['username']; ?>" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome.</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo $_SESSION['username']; ?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>My account</a></li>
                    </ul>
                </div>
            </div>
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="header">Main menu</li>
                    <li><a href="dashboard"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li>
                        <a href="#Management" class="has-arrow"><i class="icon-bulb"></i><span>Management</span></a>
                        <ul>
                            <li><a href="user-list">Registered users</a></li>
                            <li><a href="support-tickets">Support tickers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Statistics" class="has-arrow"><i class="icon-pie-chart"></i><span>Statistics</span></a>
                        <ul>
                            <li><a href="maintenance">Review</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Server" class="has-arrow"><i class="icon-cloud-upload"></i><span>Add-ons</span></a>
                        <ul>
                            <li><a href="translations">Translations</a></li>
                            <li><a href="season-pass">Season pass</a></li>
                            <li><a href="achievements">Achievements</a></li>
                        </ul>
                    </li>
                    <li class="header">Staff menu</li>
                    <li>
                        <a href="#Banhammer" class="has-arrow"><i class="icon-fire"></i><span>Banhammer</span></a>
                        <ul>
                            <li><a href="ban-list">Banned list</a></li>
                            <li><a href="appeals">Appeals</a></li>
                        </ul>
                    </li>
                    <li class="header">Admin menu</li>
                    <li>
                        <a href="#Minecraft" class="has-arrow"><i class="icon-grid"></i><span>Minecraft</span></a>
                        <ul>
                            <li><a href="virtual-console">Virtual console</a></li>
                            <li><a href="file-manager">File manager</a></li>
                        </ul>
                        <li>
                            <a href="#Network" class="has-arrow"><i class="icon-feed"></i><span>Network</span></a>
                            <ul>
                                <li><a href="catalogue">Catalogue</a></li>
                                <li><a href="announcements">Announcements</a></li>
                                <li><a href="net-logs">Logs</a></li>
                                <li><a href="net-translations">Translations</a></li>
                                <li><a href="transactions-pixels">Pixels</a></li>
                                <li><a href="transactions-credits">Credits</a></li>
                            </ul>
                        </li>
                    </li>
                    <li class="header">CPanel</li>
                    <li>
                        <a href="#CPanel" class="has-arrow"><i class="icon-wrench"></i><span>Webmin</span></a>
                        <ul>
                            <li><a href="maintenance">Permissions</a></li>
                            <li><a href="virtual-shell">Web Shell</a></li>
                            <li><a href="maintenance">Web Logs</a></li>
                            <li><a href="maintenance">Access Logs</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
