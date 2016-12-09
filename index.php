<?php
include_once 'article.php';
$article = new article();
$list = $article->index();
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
            <h1>列表展示</h1>
            <div>
                <form role="form" action="index.php" method="get">
                    关键字: <input type="text" name="keyword" value="<?php echo isset($_GET['keyword']) && !empty($_GET['keyword']) ? trim($_GET['keyword']) : "";?>" style="width:150px;"> <input type="submit" value="搜索">
                    <a href="create.php" class="buttom" style="float: right; margin-left: 20px; margin-right: 20px;">添加</a>
                   <a href="create_comment.php" class="buttom" style="float: right;">添加评论</a>
                </form>
            </div>
            
            
<table class="table table-striped">
      <thead>
        <tr>
          <th>标题</th>
          <th>作者</th>
          <th>来源</th>
          <th>内容</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if(!empty($list)){
            foreach($list as &$buf){
        ?>
        <tr>
          <td><?php echo $buf['title']; ?></td>
          <td><?php echo $buf['author']; ?></td>
          <td><?php echo $buf['source']; ?></td>
          <td><?php echo $buf['content']; ?></td>
          <td><a href="create.php?id=<?php echo $buf['_id']; ?>">修改</a> | <a href="del.php?id=<?php echo $buf['_id']; ?>">删除</a>
          | <a href="view.php?id=<?php echo $buf['_id']; ?>">查看</a>
          </td>
        </tr>            
        <?php
            }
        }
        ?>  
      </tbody>
    </table>
            
            
            
            
        </div>

    </body>
</html>





