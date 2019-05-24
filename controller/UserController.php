<?php
require_once 'DbController.php';
require_once 'DbInfo.php';

class UserController
{


    /**
     * UserController constructor.
     */
    public function __construct()
    {
    }

    public function create($data)
    {
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $commonDao->table('users')->save($data);
        return true;
    }

    public function userList(){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $userList = $commonDao->table('users')/*->where('status', '=', '1')*/->all()->result();
        return $userList;
    }
    
    public function userInfo($userId){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $userInfo = $commonDao->table('users')->where('id', '=', $userId)->all()->result();
        return $userInfo;
    }
    
    public function userUpdate($userId, $data){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $commonDao->table('users')->where('id', '=', $userId)->save($data);
    }
}