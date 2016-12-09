<?php
include 'class\mongo\collection.php';
include 'class\mongo\database.php';
include 'class\mongo\document.php';
include 'class\mongo\subdocument.php';


class Model_Document_Collection extends Mongo_Collection {
    protected $name = 'article';
    protected $db = 'test';
}
$documentCollection  = new Model_Document_Collection();
$list = $documentCollection->limit(10)->as_array();
var_dump($list);
die();

//var_dump($documentCollection);




//$posts = new Mongo_Collection('article', 'test');
//$data = $posts->limit(10)->as_array(); // array of arrays
//var_dump($data);
//die();
//
//
//
//
//$posts = new Mongo_Collection('posts_collection', 'posts_database');
//$data = $posts->sort_desc('published')->limit(10)->as_array(); // array of arrays
//var_dump($data);







//
//class Model_Document extends Mongo_Document {
//  protected $_references = array(
//    'other' => array('model' => 'other'),
//    'lots'  => array('model' => 'other', 'field' => '_lots', 'multiple' => TRUE)
//  );
//}
//
///* Table Data Gateway Pattern */
//class Model_Other extends Mongo_Document {
//  protected $name = 'mongotest';
//  protected $db = 'mongotest';
//
//  protected $_searches = array(
//    'docs' => array('model' => 'document', 'field' => '_other'),
//  );
//}
//
//
//$db = Mongo_Database::instance('test', array('database' => 'test'));

//echo $db->getName();
//
//$result = $db->exists("article");
//var_dump($result);

//$collection = $db->article;
//$data = array(
//      'name' => 'mongo',
//      'counter' => 10,
//      'set' => array('foo','bar','baz'),
//      'simplenested' => array(
//        'foo' => 'bar',
//      ),
//      'doublenested' => array(
//        'foo' => array('bar' => 'baz'),
//      ),
//    );
//$collection->insert($data);
//var_dump($collection);




    
    

//$Model_Document_Collection  = new Model_Document_Collection();
//var_dump($Model_Document_Collection);

 //* $posts = new Mongo_Collection('posts');
 //* $posts->sort_desc('published')->limit(10)->as_array(); // array of arrays
 
 
 



//    $data = array(
//      'name' => 'mongo',
//      'counter' => 10,
//      'set' => array('foo','bar','baz'),
//      'simplenested' => array(
//        'foo' => 'bar',
//      ),
//      'doublenested' => array(
//        'foo' => array('bar' => 'baz'),
//      ),
//    );
//    //$this->out('BEFORE',$data);
//    $doc = new Model_Document();
//    $Mongo_Collection = $doc->collection();
//    
//    
//    
//    $doc->db = $db;
//    $doc->load_values($data);
//    $doc->save();
//    
    
    
    

//var_dump($Model_Document_Collection);
//