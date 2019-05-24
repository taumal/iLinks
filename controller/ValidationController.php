<?php

require_once 'DbController.php';
require_once 'DbInfo.php';

class ValidationController
{
    public function isEmpty($input){
        if (empty($input)) {
            return true;
        }
    }

    public function isURL($input){
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $input)) {
            return true;
        }
    }
    
    public function isExist($input, $table, $column, $userId){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $tags = $commonDao->table($table)->where($column, '=', $input)->where('created_by', '=', $userId)->get([$column])->result();
        foreach ($tags as $tag) {
            if ($tag->$column == $input) {
                return true;
            }
        }
    }
}