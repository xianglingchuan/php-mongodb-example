<?php
include_once 'class\mongo\collection.php';
include_once 'class\mongo\database.php';
include_once 'class\mongo\document.php';
include_once 'class\mongo\subdocument.php';
include_once 'class\json.php';


class Model_Comment extends Mongo_Document {
     protected $name = 'comment';
     protected $db = "shop";
     protected $_references = array('article' => array('model' => 'model_article'));
      
}
