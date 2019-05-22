<?php
require_once 'DbController.php';
require_once 'DbInfo.php';

class LoginController
{

    public function authenticate($u, $p)
    {
        $authentic = false;
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $users = $commonDao->table('users')->where('username', '=', $u)->where('status','=',1)->all()->result();

        foreach ($users as $user){
            if ($u == $user->username && password_verify($p, $user->password) /*$p == $user->password*/) {
                $authentic = true;
            }
        }
        return $authentic;
    }
    
    public function login($username, $password) 
    {
        if ($this->authenticate($username, $password)) {
            session_start();
            $config = new DbInfo();
            $commonDao = new CommonDao($config->config());
            $users = $commonDao->table('users')->where('username', '=', $username)->all()->result();

            $_SESSION['users'] = $users;
            return true;
        }
    }
}