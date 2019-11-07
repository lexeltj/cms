<?php
namespace App\Core;

use PDO;

abstract class AbstractRepository {
    
    private $myDB;
    
    public function __construct(PDO $myDB)
    {
        $this->myDB = $myDB;
    }
    
    
    abstract public function getTableName();
    abstract public function getModelName();
    
    function all(){
        
        
        $table = $this->getTableName();
        $model = $this->getModelName();
      
        
        $stmt =  $this->myDB->query("select * from {$table}");
        
   
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS,$model);
        //var_dump($posts);
        return $posts;
    }
    
    function find($posts) {
        //global $myDB;
        
        $table = $this->getTableName();
        $model = $this->getModelName();
        //$sql = "select * from posts where id = {$post}";
        $sql = $this->myDB->prepare("select * from {$table} where id = ?");
        $sql->execute([$posts]);
        //$ergebnis = $myDB->query($sql);
        
        //return $ergebnis->fetch();
        $sql->setFetchMode(PDO::FETCH_CLASS,$model);
        
        $post = $sql->fetch(PDO::FETCH_CLASS);
        
        
        //var_dump($post);
        // alles neu in OOP
        
        /*$post = new PostModel();
         $post->id = $postArray["id"];
         $post->title = $postArray["title"];
         $post->content = $postArray["post"];*/
        return $post;
    }
    
}