<?php

include_once './model/model_article.php';
include_once './model/model_comment.php';
include_once './model/collection_article.php';
include_once './model/collection_comment.php';

class article{
    
    public function index(){
        $page = isset($_GET['page']) && intval($_GET['page'])>=1 ? intval($_GET['page']) : 1;
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        $limit = 10;
        $offset = ($page-1)*$limit;
        $collectionArticle = new Collection_Article();
        if(!empty($keyword)){
            $collectionArticle->find(array('title' => new MongoRegex("/{$keyword}/")));
        }
        $list = $collectionArticle->skip($offset)->limit($limit)->as_array();
        return $list;
    }
    
    
    public function getList(){
        $collectionArticle = new Collection_Article();
        $list = $collectionArticle->as_array();
        return $list;
    }
    
    
    public function getInfo($id){
        $info = new Model_Article($id);
        return $info;        
    }
    
    
    
    public function getCommentListByArticleId($articleId){
        $collectionComment = new Collection_Comment();
        return $collectionComment->find(array("article_id"=>$articleId))->as_array();        
    }
    
    
    
    public function del($id){
        $modelUser = new Model_Article("$id");
        return $modelUser->delete();                
    }
    
    public function save(){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $source = $_POST['source'];
        $content = $_POST['content'];
        $id = isset($_POST['id']) && !empty($_POST['id']) ? trim($_POST['id']) : ""; 
        $modelArticle = new Model_Article($id);   
        
        $modelArticle->title = $title;
        $modelArticle->author = $author;
        $modelArticle->source = $source;
        $modelArticle->content = $content;
        
        
        $images = $modelArticle->images;
        if(!empty($_FILES['images'])){
            for($i=0; $i<count($_FILES['images']['name']); $i++){
                if(!empty($_FILES["images"]["name"][$i])){
                    $file = "upload/".time()."_".$_FILES["images"]["name"][$i];
                    $result = move_uploaded_file($_FILES["images"]["tmp_name"][$i],$file);
                    if($result){
                        $images[$i] = $file;
                    }                    
                }
            }
        }    
        $modelArticle->images = $images;        
        $result = $modelArticle->save();       
        return $result;
    }  
    
    
    
    public function commentSave(){
        $article_id = $_POST['article_id'];
        $manner = $_POST['manner'];
        $content = $_POST['content'];
        if(!empty($article_id) && !empty($manner) && !empty($content)){
            $modelArticle = new Model_Article($article_id);   
            if(!empty($modelArticle)){                
                $modelComment = new Model_Comment();
                $modelComment->article = $modelArticle;
                $modelComment->manner = $manner;
                $modelComment->content = $content; 
                $modelComment->article_id = $article_id;
                if($modelComment->save()){
                    $result = $modelArticle->inc("comment_count")->save();    
                    if(!empty($result)){
                        return true;
                    }
                }
            }            
        }
        return false;
    }
    
}








