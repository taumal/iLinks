<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login/usrLogin.php");
}
$pageTitle = "Profile";
include_once 'layout/header.php';
require_once 'controller/UserController.php';

$authUsers = $_SESSION['users'];
foreach ($authUsers as $user) {
    $role = $user->roles;
}


$user_id = $_GET['id'];

$user = new UserController();
$userProfile = $user->userInfo($user_id);
foreach ($userProfile as $userInfo) {
    $fullName = $userInfo->full_name;
    $email = $userInfo->email_id;
    $username = $userInfo->username;
    $userRole = $userInfo->roles;
    $userStatus = $userInfo->status;
    $oldPassword = $userInfo->password;
}

if (isset($_POST['save'])) {
    if (!empty($_POST['password']))
    {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    } else {
        $password = $oldPassword;
    }

    if (trim($role) == trim('admin')) {
        $newRole = $_POST['roles'];
        $newStatus = $_POST['status'];
    } else {
        $newRole = $userRole;
        $newStatus = $userStatus;
    }
    $data = [
        'full_name' => $_POST['full_name'],
        'email_id' => $_POST['email_id'],
        'password' => $password,
        'roles' => $newRole,
        'status' => $newStatus,
    ];

    $user->userUpdate($user_id, $data);
}
?>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profile of <b>'<?php echo $fullName; ?>'</b>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="form-control" placeholder="Fullname" type="text" name="full_name" value="<?php echo htmlspecialchars($fullName);?>">
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input class="form-control" placeholder="Email" type="text" name="email_id" value="<?php echo htmlspecialchars($email);?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <p class="form-control-static"><?php echo $username; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Password </label>
                                    <input class="form-control" placeholder="Password" type="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password </label>
                                    <input class="form-control" placeholder="Password" type="password">
                                </div>
                                <?php if (trim($role) == trim('admin')) { ?>
                                    <div class="form-group">
                                        <label>Roles</label>
                                        <label class="checkbox-inline">
                                            <input name="roles" value="admin" <?php if (trim($userRole) == trim('admin')) echo "checked"; ?> type="radio">Admin
                                        </label>
                                        <label class="checkbox-inline">
                                            <input name="roles" value="user" <?php if (trim($userRole) == trim('user')) echo "checked"; ?> type="radio">User
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <label class="radio-inline">
                                            <input name="status" id="st_1" value="1" <?php if ($userStatus == 1) echo "checked"; ?> type="radio">Active
                                        </label>
                                        <label class="radio-inline">
                                            <input name="status" id="st_2" value="0" <?php if ($userStatus == 0) echo "checked"; ?> type="radio">Inactive
                                        </label>
                                    </div>
                                <?php } ?>
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