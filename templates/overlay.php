<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<nav class="navbar top-navbar">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="dashboard"><img src="../assets/images/icon.svg" alt="Zibuu Entertainment" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
        </div>

        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                  <form action="handler/core-logout.php" method="post">
                    <inpyt type="hidden" name="handler" value="core-logout">
                    <a href="handler/core-logout"><li><i class="icon-power"></i></li></a>
                  </form>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
</nav>
