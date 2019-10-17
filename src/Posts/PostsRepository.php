<?php
namespace App\Posts;

use PDO;

class PostsRepository {
   
    private $myDB;
    public function __construct(PDO $myDB)
    {
        $this->myDB = $myDB;
    }
    
    function fetchPost(){
        
        $stmt =  $this->myDB->query("select * from posts");
        
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS,"App\\Posts\\PostModel");
        //var_dump($posts);
        return $posts;
    }
    
    function fetchPosts($posts) {
        //global $myDB;
        
        //$sql = "select * from posts where id = {$post}";
        $sql = $this->myDB->prepare("select * from posts where id = ?");
        $sql->execute([$posts]);
        //$ergebnis = $myDB->query($sql);
        
        //return $ergebnis->fetch();
        $sql->setFetchMode(PDO::FETCH_CLASS,"App\\Posts\\PostModel");
       
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