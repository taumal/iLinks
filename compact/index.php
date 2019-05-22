<?php
/*require_once 'controller/DbController.php';
require_once 'controller/DbInfo.php';

$config = new DbInfo();
$commonDao = new CommonDao($config->config());

$user = $commonDao->table('users');
$user->full_name='MR Taumal';
$user->email_id='taumal@qmail.com.bd';
$user->username='taumal';
$user->password='taumal1234';
$user->status=1;
$user->roles='admin';
$user->save();

$users = $commonDao->table('users')->where('id', '=', '1')->all()->result();



var_dump($users);
$u = 'taumal';
$p = 'taumal1234';
foreach ($users as $user){
    if ($u == $user->username && $p == $user->password)
    {
        echo 'true';
    }
}


echo $users->id;
echo "<pre>";
print_r($users);*/
header('Location: login/usrLogin.php');
?>