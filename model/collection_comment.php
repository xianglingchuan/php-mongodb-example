<?php
include_once 'class\mongo\collection.php';
include_once 'class\mongo\database.php';
include_once 'class\mongo\document.php';
include_once 'class\mongo\subdocument.php';
include_once 'class\json.php';

class Collection_Comment extends Mongo_Collection {
     protected $name = 'comment';
     protected $db = "shop";
}


