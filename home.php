<?php include('_session.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kape't tsaa</title>
    <link rel="shortcut icon" href="static/img/icon.ico" />
    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <link rel="stylesheet" type="text/css" href="static/css/fonts.css">
    <script type="text/javascript" src="static/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="static/js/script.js"></script>
</head>
<body>
    <nav class="container-fluid navbar-fixed-top">
        <div class="row nav-row">
            <div class="col-sm-3 col-xs-9 navbar-logo">
                <div class="nav-logo">
                    <p><a href="index.php">kape't tsaá</a></p>
                </div>
            </div>
            <div class="col-sm-9 col-xs-3 navbar-content">
                <ul>
                    <li><a href="_logout.php">log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="home">
        <div class="container">
            <div class="row row-top">
                <div class="col-xs-12 col-md-6">
                    <p class="featured-p-heading home-text">Account Information</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <ul>
                                <li>First Name</li>
                                <li>Middle Name</li>
                                <li>Last Name</li>
                                <li>Gender</li>
                                <li>Email</li>
                                <li>Mobile Number</li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                        <?php
                            // SQL Query To Fetch Complete Information Of User
                            $ses_sql=mysql_query("select * from users where email='$user_check'", $connection);
                            $row = mysql_fetch_assoc($ses_sql);
                        ?>                            
                            <ul>
                                <li><?php echo $row['first_name'] ?></li>
                                <li><?php echo $row['middle_name'] ?></li>
                                <li><?php echo $row['last_name'] ?></li>
                                <li><?php echo $row['gender'] ?></li>
                                <li><?php echo $row['email'] ?></li>
                                <li><?php echo $row['mobile_number'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <p class="featured-p-heading home-text">Account Balance</p>
                    <h3 class="home-text text-center">&#8369 <?php echo $row['balance'] ?></h3>
                </div>
            </div>
        </div>    
    </div>
    
<?php include('footer.php') ?>