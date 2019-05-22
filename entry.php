<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login/usrLogin.php");
}
$pageTitle = "Link Entry";
include_once 'layout/header.php';
require_once 'controller/LinkController.php';
require_once 'controller/ValidationController.php';

$saveLink = new LinkController();
$tagLists = $saveLink->tagList();

$valid = new ValidationController();
$errors = array();

if (isset($_POST['save'])) {
    $users = $_SESSION['users'];
    foreach ($users as $user) {
        $id = $user->id;
    }
    $topicsName = $saveLink->plainInput($_POST['topics_name']);
    $link = $saveLink->plainInput($_POST['link']);
    $tags = array_map('strtolower', $_POST['tags']);

    if ($valid->isEmpty($topicsName)) {
        $errors['topic_blank'] = 'Please enter topics name.';
    }
    if ($valid->isEmpty($link) || $valid->isURL($link)) {
        $errors['link_blank'] = 'Please enter a valid url.';
    }
    if ($valid->isExist($link, 'links', 'link', $id)){
        $errors['link_exist'] = 'This link already exist.';
    }
    if (count($tags) < 1) {
        $errors['tags'] = 'Tags are empty';
    }

    if (count($errors) > 0) { ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php
                    foreach ($errors as $error) {
                        if (!is_null($error)) {
                            echo $error.'<br>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div> <?php
    } else {
        $data = [
        'topics_name' => $topicsName,
        'link' => $link,
        'created_by' => $id,
        'visited_at' => date("Y/m/d"),
        'tags' => implode(",", $tags),
    ];
        $saveLink->create($data);
        $saveLink->createTags($tags);
        echo "<script>window.location.href = 'entry.php?_isSaved=true';</script>";
    }

}
if ($_GET['_isSaved'] == true && count($errors) < 1) { ?>
    <div class='alert alert-success'>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Successfully Saved
    </div> <?php 
}
?>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Link Entry Form
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <form role="form" method="post" action="">
                                <div class="form-group <?php if (!is_null($errors['topic_blank'])) echo 'has-error'; ?>">
                                    <label class="control-label">Topic Name</label>
                                    <input class="form-control" type="text" name="topics_name" value="<?php echo htmlspecialchars($topicsName);?>">
                                </div>
                                <div class="form-group <?php if (!is_null($errors['link_blank']) || !is_null($errors['link_exist'])) echo 'has-error'; ?>">
                                    <label class="control-label">Link</label>
                                    <textarea class="form-control" rows="3" name="link"><?php echo htmlspecialchars($link);?></textarea>
                                </div>
                                <div class="form-group">
                                    <select class="tags form-control" name="tags[]" multiple="multiple">
                                        <?php
                                        foreach ($tagLists as $tagList) {
                                            echo $tagList->tag_name;
                                            echo '<option value="'.strtolower($tagList->tag_name).'"';
                                            echo ">" .strtoupper($tagList->tag_name). "</option>";
                                        }
                                        ?>
                                    </select>
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