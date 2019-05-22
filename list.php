<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login/usrLogin.php");
}

$pageTitle = "Link List";
include_once 'layout/header.php';
require_once 'controller/LinkController.php';

$users = $_SESSION['users'];
foreach ($users as $user) {
    $id = $user->id;
}
$linkList = new LinkController();
$lists = $linkList->linkList($id);

if (isset($_POST['delSure'])){
    $data = ['status' => 0];
    $delLinkId = $_POST['delLinkId'];
    if ($linkList->updateLink($delLinkId, $data)){
        echo "<script>window.location.href = 'list.php?_isDel=true';</script>";
    } else {
        header('Location: list.php');
    }
}
if ($_GET['_isDel'] == true) {
    echo "<div class='alert alert-success'>Successfully Deleted</div>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Browsed Links Table
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tbl-iLinks" width="100%">
                        <thead>
                        <tr>
                            <th><i class="fa fa-star fa-1x fa-fw"></i></th>
                            <th>Topics</th>
                            <th>Link</th>
                            <th>Tags</th>
                            <th>Open</th>
                            <th style="width: 75px;">What to do</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($lists as $list) { ?>
                            <tr>
                                <td><a id="<?php echo $list->id; ?>" class="btn btn-link" onclick="addToFav(this.id)"><i id="fa<?php echo $list->id; ?>" class="fa <?php if ($list->add_to_fav == 0) echo 'fa-star-o'; else echo 'fa-star'; ?> fa-1x fa-fw"></i></a></td>
                                <td><?php echo $list->topics_name; ?></td>
                                <td><?php echo $list->link; ?></td>
                                <td><?php echo $list->tags; ?></td>
                                <td><a class="btn btn-link" href="<?php echo $list->link; ?>" target="_blank"> <i class="fa fa-external-link fa-2x fa-fw"></i> </a></td>
                                <td><button id="<?php echo $list->id; ?>" class="btn btn-link" name="delete" type="button" data-toggle="modal" data-target="#myModal" onclick='setDelLinkId(this.id)' > <i class="fa fa-trash fa-2x fa-fw"></i> </button></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                                <input type="hidden" id="delLinkId" name="delLinkId">
                                <div class="modal-body">
                                    <p>Do you really want to delete selected link???</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary" name="delSure">Yes</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>

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
