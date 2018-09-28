<nav class="container-fluid navbar-fixed-top">
    <div class="row nav-row">
        <div class="col-sm-3 col-xs-9 navbar-logo">
            <div class="nav-logo">
                <p><a href="index.php">kape't tsaá</a></p>
            </div>
        </div>
        <div class="col-sm-9 col-xs-3 navbar-content">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="kape.php">kape</a></li>
                <li><a href="tsaa.php">tsaa</a></li>
                <li><a href="menu.php">menu</a></li>
                <li><a href="locations.php">locations</a></li>
                <?php 
                if (isset($login_session)) {
                    echo "
                        <li><a href='_logout.php'>log out</a></li>
                    ";
                }
                else if(!isset($login_session)){
                    echo "
                        <li><span data-toggle='modal' data-target='#login'>log in</span></li>
                    ";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>