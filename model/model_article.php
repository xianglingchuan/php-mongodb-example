<?php
include_once 'class\mongo\collection.php';
include_once 'class\mongo\database.php';
include_once 'class\mongo\document.php';
include_once 'class\mongo\subdocument.php';
include_once 'class\json.php';


class Model_Article extends Mongo_Document {
     protected $name = 'article';
     protected $db = "shop";
}
