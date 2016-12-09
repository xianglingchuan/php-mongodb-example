<?php
include 'class\mongo\collection.php';
include 'class\mongo\database.php';
include 'class\mongo\document.php';
include 'class\mongo\subdocument.php';
include 'class\json.php';



class Model_Post extends Mongo_Document {
     protected $name = 'posts';
     protected $_references = array('user' => array('model' => 'user'));
}

class Model_User extends Mongo_Document {
     protected $name = 'users';
}


//$user = Mongo_Document::factory('user')
//                         ->set('id',    'colin')
//                         ->set('email', 'colin@mollenhour.com')->save();
//$post = Mongo_Document::factory('post');
//$post->user  = $user;
//$post->title = 'MongoDB';
//$post->save();
           
//查询
$id = "5821c5e12c7aa3e80700002d";
$post = new Model_Post($id);
echo $post->_user;
echo   $post->user->id;
echo  "email:".$post->user->email."<BR>";



//echo json_encode($value)


//class Model_Document_Collection extends Mongo_Collection {
//  protected $name = 'mongotest';
//  protected $db = 'mongotest';
//}
//
//class Model_Document extends Mongo_Document {
//  protected $_references = array(
//    'other' => array('model' => 'other'),
//    'lots'  => array('model' => 'other', 'field' => '_lots', 'multiple' => TRUE)
//  );
//}

/* Table Data Gateway Pattern */
//class Model_Other extends Mongo_Document {
//  protected $name = 'mongotest';
//  protected $db = 'mongotest';
//
//  protected $_searches = array(
//    'docs' => array('model' => 'document', 'field' => '_other'),
//  );
//}



//class Model_Document_Collection extends Mongo_Document {
//    protected $name = 'article';
//    protected $db = 'test';
//    
//    protected $_searches = array(
//      'docs' => array('model' => 'document', 'field' => '_other'),
//    );
//    
//}

//class Model_Document extends Mongo_Document {
//     protected $name = 'article';
//     protected $db = "shop";
//     
//}
//$document = new Model_Document(); 



//添加记录
//$document->name = 'Mongo';
//$document->type = 'db';
//$result = $document->save();
//var_dump($result);


//查询记录
//$info = $document->load('{name:"Mongo"}');
//echo "=========<BR>";
//var_dump($info);
//echo $document->id;
//echo "=========<BR>";




//$id = "5821c0622c7aa3e80700002a";
//$doc = new Model_Document($id);
//$doc->inc('uses.boing') //自动增长值
//     ->push('used', array('type' => 'sound', 'desc' => 'boing'));
//$doc->inc('uses.bonk') //自动增长值
//    ->push('used', array('type' => 'sound', 'desc' => 'bonk'))
//    ->save();



//两个表之间的关联外键保存及查询
//class Model_Post extends Mongo_Document {
//     protected $name = 'posts';
//     protected $_references = array('user' => array('model' => 'user'));
//}
//
//class Model_User extends Mongo_Document {
//     protected $name = 'users';
//}
//
//$modelUser = new Model_User("colin");
//$result = $modelUser->delete();
//var_dump($result);





//$user = Mongo_Document::factory('user')
//                         ->set('id',    'colin')
//                         ->set('email', 'colin@mollenhour.com')->save();
//$post = Mongo_Document::factory('post');
//$post->user  = $user;
//$post->title = 'MongoDB';
//$post->save();
//           
////查询
//$id = "5821c5e12c7aa3e80700002d";
//$post = new Model_Post($id);
//echo $post->_user;
//echo   $post->user->id;
//echo  "email:".$post->user->email."<BR>";
