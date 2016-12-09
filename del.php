<?php
include_once 'article.php';
$article = new article();
$id = isset($_GET['id']) && !empty($_GET['id']) ? trim($_GET['id']) : "";
$info = array();
if(!empty($id)){
    $result = $article->del($id);
    if($result){
        header("Location:index.php");
    }else{
        echo "<B>操作失败!</B>";
    }
}else{
    echo "<B>操作失败!</B>";
}
?>