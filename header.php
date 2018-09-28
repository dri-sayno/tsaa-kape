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
    <?php include('navigation.php') ?>
        <!-- Modal -->
    <div class='modal fade' id='login' role='dialog'>
        <div class='modal-dialog'>
            <!-- Modal content-->
            <div class='modal-content'>
                <div class='modal-header text-center'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h3 class='modal-title'>Kape't Tsaá Card</h3>
                </div>
                <form action='header.php' method='post'>
                    <div class='modal-body'>
                        <div class='form-group'>
                            <label for='email'>Email address:</label>
                            <input type='email' class='form-control' id='email' name='email' required>
                        </div>
                        <div class='form-group'>
                            <label for='pwd'>Password:</label>
                            <input type='password' class='form-control' id='pwd' name='password' required>
                        </div>
                        <?php
                        if (isset($_GET['checkpass'])) {
                            $check_passwords = $_GET['checkpass'];
                        }
                        if (isset($_GET['checkpass'])) {
                            echo 
                            "<p class='modal-title' style='padding:10px;border-bottom:none;color:#cc0000;'>
                                <i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Username or Password is invalid!
                            </p>";
                        }?>
                    </div>
                    <div class='modal-footer'>
                        <button type='submit' class='btn btn-default' name='submit' value='login'>Submit</button>
                        <button type='reset' class='btn btn-default'>Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        $dbhost = 'localhost';
        $dbuser = 'dbdb';
        $dbpass = 'dbdb';
        $connection = mysql_connect($dbhost, $dbuser, $dbpass);
        $submit= $_POST['submit'];
        if($submit == 'login'){
            if (empty($_POST['email']) || empty($_POST['password'])) {
                $error = "Username or Password is invalid";
            }
            else{
                // Define $username and $password
                $email=$_POST['email'];
                $password=$_POST['password'];

                // Establishing Connection with Server by passing server_name, user_id and password as a parameter
                $connection = mysql_connect("localhost", "dbdb", "dbdb");

                // To protect MySQL injection for Security purpose
                $email = stripslashes($email);
                $password = stripslashes($password);
                $email = mysql_real_escape_string($email);
                $password = mysql_real_escape_string($password);

                // Selecting Database
                $db = mysql_select_db("kapettsaa", $connection);

                // SQL query to fetch information of registerd users and finds user match
                $query = mysql_query("SELECT * FROM users WHERE password='$password' AND email='$email'", $connection);
                $rows = mysql_num_rows($query);
                if ($rows == 1) {
                    $_SESSION['email']=$email; // Initializing Session
                    header("location: home.php"); // Redirecting To Other Page
                }
                else {
                    header("location: index.php?checkpass=false");
                }
                mysql_close($connection); // Closing Connection
            }
        }
    }
    ?>