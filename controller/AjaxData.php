<?php
require_once './LinkController.php';

$linkList = new LinkController();

if (isset($_POST['id'])){
    $data = ['add_to_fav' => 1];
    $updateLinkId = $_POST['id'];
    if ($linkList->updateLink($updateLinkId, $data)){
    }
}