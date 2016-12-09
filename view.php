<?php
include_once 'article.php';
$article = new article();
$id = isset($_GET['id']) && !empty($_GET['id']) ? trim($_GET['id']) : "";
$info = $commentList = array();
if(!empty($id)){
    $info = $article->getInfo($id);
    $commentList = $article->getCommentListByArticleId($id);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div style="width:80%; margin: auto;">
            <h1>详细内容</h1>
            <form role="form" action="create.php" method="post" enctype="multipart/form-data">
      
            <div class="form-group">
                <p class="lead"><label for="exampleInputEmail1">文章标题</label>: 
                <?php echo isset($info['title']) ? $info['title'] : "";?></p>
            </div>
            <div class="form-group">
                <p class="lead"><label for="exampleInputEmail1">作者</label>: 
                <?php echo isset($info['author']) ? $info['author'] : "";?></p>
            </div>
            <div class="form-group">
                <p class="lead"><label for="exampleInputEmail1">来源</label>: 
                <?php echo isset($info['source']) ? $info['source'] : "";?></p>
            </div>
            <div class="form-group">
                <p class="lead"><label for="exampleInputEmail1">内容</label>: 
                <?php echo isset($info['content']) ? $info['content'] : "";?></p>
                <input type="hidden" name="id" value="<?php echo isset($info['id']) ? $info['id'] : "";?>">
            </div>
                
            <div class="form-group">
                <?php 
                if(!empty($info['images'])){
                    foreach ($info['images'] as $images){?>
                   <img src="<?php echo $images; ?>" style="width:100px;">     
                   <?php
                   }
                }
                ?>
            </div>
                
            
            <h3>评论内容</h3>                
            <div class="form-group">
                <?php 
                if(!empty($commentList)){
                    foreach($commentList as $comment){
                    ?>   
                    <p class="lead">态度: <?php echo $comment['manner'];?>  内容:<?php echo $comment['content'];?></p>
                    <?php
                   }                    
                }
                ?>
            </div>
                
                
                
            <a href="index.php" class="btn btn-default">返回</a>
        </form>            
        </div>
    </body>
</html>
