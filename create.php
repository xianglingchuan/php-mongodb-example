<?php
include_once 'article.php';
$article = new article();

$id = isset($_GET['id']) && !empty($_GET['id']) ? trim($_GET['id']) : "";
$info = array();
if(!empty($id)){
    $info = $article->getInfo($id);
}


if(!empty($_POST)){
    $result = $article->save();
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
            <h1>添加</h1>
            <form role="form" action="create.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">文章标题</label>
                <input  name="title" value="<?php echo isset($info['title']) ? $info['title'] : "";?>" class="form-control" placeholder="文章标题">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">作者</label>
                <input  name="author" value="<?php echo isset($info['author']) ? $info['author'] : "";?>" class="form-control" placeholder="作者">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">来源</label>
                <input  name="source" value="<?php echo isset($info['source']) ? $info['source'] : "";?>" class="form-control" placeholder="来源">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">内容</label>
                <textarea class="form-control" name="content"><?php echo isset($info['content']) ? $info['content'] : "";?></textarea>
                <input type="hidden" name="id" value="<?php echo isset($info['id']) ? $info['id'] : "";?>">
            </div>
                
            <div class="form-group">
                <label for="exampleInputEmail1">图片一</label>
                <input  name="images[]" type="file" value="" class="form-control" style="width:200px;" placeholder="">
                <?php if(isset($info['images'][0]) && !empty($info['images'][0])){ ?>
                <img src="<?php echo $info['images'][0]; ?>" style="width:100px;">
                <?php }?>
                
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">图片二</label>
                <input  name="images[]" type="file" value="" class="form-control" style="width:200px;" placeholder="">
                <?php if(isset($info['images'][1]) && !empty($info['images'][1])){ ?>
                <img src="<?php echo $info['images'][1]; ?>" style="width:100px;">
                <?php }?>
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">图片三</label>
                <input  name="images[]" type="file" value="" class="form-control" style="width:200px;" placeholder="">
                <?php if(isset($info['images'][2]) && !empty($info['images'][2])){ ?>
                <img src="<?php echo $info['images'][2]; ?>" style="width:100px;">
                <?php }?>                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">图片四</label>
                <input  name="images[]" type="file" value="" class="form-control" style="width:200px;" placeholder="">
                <?php if(isset($info['images'][3]) && !empty($info['images'][3])){ ?>
                <img src="<?php echo $info['images'][3]; ?>" style="width:100px;">
                <?php }?>    
            </div>
            
            <button type="submit" class="btn btn-default">提交</button>
            <a href="index.php" class="btn btn-default">取消</a>
        </form>            
        </div>

    </body>
</html>
