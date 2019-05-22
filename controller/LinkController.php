<?php
require_once 'DbController.php';
require_once 'DbInfo.php';

class LinkController
{
    
    /**
     * LinkController constructor.
     */
    public function __construct()
    {
    }

    public function create($data)
    {
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $commonDao->table('links')->save($data);
        return true;
    }

    public function createTags($data)
    {
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $tagSave = $commonDao->table('tags');
        foreach ($data as $tags) {
            if (!$this->isTagExist($tags)){
                $tagSave->tag_name = $tags;
                $tagSave->save();
            }
        }
    }

    public function linkList($userId){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $linksList = $commonDao->table('links')->where('created_by', '=', $userId)->where('status','=',1)->all()->result();
        return $linksList;
    }

    public function favLinkList($userId){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $linksList = $commonDao->table('links')->where('created_by', '=', $userId)->where('status','=',1)->where('add_to_fav','=',1)->all()->result();
        return $linksList;
    }
    
    public function updateLink($linkId, $data){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        if (!$this->isDeleted('links', $linkId)) {
            $commonDao->table('links')->where('id', '=', $linkId)->save($data);
            return true;
        } else {
            return false;
        }
    }

    public function tagList(){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $tagList = $commonDao->table('tags')->all()->result();
        return $tagList;
    }

    public function plainInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function isTagExist($_tag)
    {
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $tags = $commonDao->table('tags')->where('tag_name', '=', $_tag)->get(['tag_name'])->result();
        foreach ($tags as $tag) {
            if ($tag->tag_name == $_tag) {
                return true;
            }
        }
    }

    public function isDeleted($table, $id){
        $config = new DbInfo();
        $commonDao = new CommonDao($config->config());
        $getDelLinkId = $commonDao->table($table)->where('id', '=', $id)->where('status','=',0)->get(['id'])->result();
        foreach ($getDelLinkId as $linkId){
            if ($linkId->id == $id) {
                return true;
            }
        }
    }
}