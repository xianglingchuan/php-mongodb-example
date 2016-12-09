<?php
include_once 'article.php';
$article = new article();
$articleList = $article->getList();
if(!empty($_POST)){
    $result = $article->commentSave();
    if($result){
        header("Location:index.php");
    }else{
        echo "<B>操作失败!</B>";
    }
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
            <h1>添加评论</h1>
            <form role="form" action="create_comment.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">选择文章</label>
                <select class="form-control" name="article_id">
                    <?php
                    if(!empty($articleList)){
                        foreach($articleList as &$article){
                            echo "<option value='{$article['_id']}'>{$article['title']}</option>";
                        }
                    }
                    ?>                    
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">态度</label>
                <select class="form-control" name="manner">
                    <option value='一般'>一般</option>
                    <option value='非常好'>非常好</option>
                </select>                
            </div>
         
            <div class="form-group">
                <label for="exampleInputEmail1">内容</label>
                <textarea class="form-control" name="content"></textarea>
                <input type="hidden" name="id" value="">
            </div>
                
            
            <button type="submit" class="btn btn-default">提交</button>
            <a href="index.php" class="btn btn-default">取消</a>
        </form>            
        </div>

    </body>
</html>
