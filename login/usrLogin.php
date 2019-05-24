<?php
session_start();
if (isset($_SESSION['users'])) { header('Location: ../dashboard.php'); }

require_once '../controller/LoginController.php';

if (isset($_POST['login'])) {
    $loginCtrl = new LoginController();
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if ($loginCtrl->login($username, $password)) {
        header('Location: ../dashboard.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iLinks - Track Your Browsed Data</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="../css/app.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <?php if (@$_GET['err'] == 1) { ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-danger">
                <p class="text-danger">Login incorrect. Please try again!</p>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-12 text-center hidden-xs" style="height: 150px;">
            <h2><img src="../img/iLinks.png" alt="iLinks"></h2>
            <h3><small>Track Your Browsed Data</small></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" alt="login-banner-670x335.jpg" src="../img/login-banner-670x335.jpg">
        </div>
        <div class="col-md-4 col-md-offset-2">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>
</html>