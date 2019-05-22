<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login/usrLogin.php");
}
$pageTitle = "User Entry";
include_once 'layout/header.php';
require_once 'controller/UserController.php';

$user_id = $_GET['id'];


if (isset($_POST['save'])) {
    $createUser = new UserController();
    $data = [
        'full_name' => $_POST['full_name'],
        'email_id' => $_POST['email_id'],
        'username' => $_POST['username'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'roles' => $_POST['roles'],
        'status' => $_POST['status'],
    ];
    if ($createUser->create($data)) {
        header('Location: ../dashboard.php');
    }
}

?>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User Entry Form
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="form-control" placeholder="Fullname" type="text" name="full_name">
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input class="form-control" placeholder="Email" type="text" name="email_id">
                                </div>
                                <div class="form-group">
                                    <label>Username </label>
                                    <input class="form-control" placeholder="Username" type="text" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password </label>
                                    <input class="form-control" placeholder="Password" type="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password </label>
                                    <input class="form-control" placeholder="Password" type="password">
                                </div>
                                <div class="form-group">
                                    <label>Roles</label>
                                    <label class="checkbox-inline">
                                        <input name="roles" value="admin" type="radio">Admin
                                    </label>
                                    <label class="checkbox-inline">
                                        <input name="roles" value="user" type="radio">User
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <label class="radio-inline">
                                        <input name="status" id="st_1" value="1" checked="" type="radio">Active
                                    </label>
                                    <label class="radio-inline">
                                        <input name="status" id="st_2" value="0" type="radio">Inactive
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default" name="save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include_once 'layout/footer.php';
?>