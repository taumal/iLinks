<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login/usrLogin.php");
}

$pageTitle = "User List";
include_once 'layout/header.php';
require_once 'controller/UserController.php';

$userList = new UserController();
$lists = $userList->userList();
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Browsed Links Table
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="tbl-iLinks">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Open</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($lists as $list) { ?>
                                <tr>
                                    <td><?php echo $list->full_name; ?></td>
                                    <td><?php echo $list->email_id; ?></td>
                                    <td><?php echo $list->username; ?></td>
                                    <td><?php if ($list->status == 1) echo 'Active'; else echo 'Inactive'; ?></td>
                                    <td><a href="usrProfile.php?id=<?php echo $list->id; ?>"> <i class="fa fa-pencil-square-o fa-2x fa-fw"></i> </a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
<?php
include_once 'layout/footer.php';
?>