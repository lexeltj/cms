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
        
        return $this->myDB->query("select * from posts");
    }
    
    function fetchPosts($post) {
        //global $myDB;
        
        //$sql = "select * from posts where id = {$post}";
        $sql = $this->myDB->prepare("select * from posts where id = ?");
        $sql->execute([$post]);
        //$ergebnis = $myDB->query($sql);
        
        //return $ergebnis->fetch();
        $postArray =  $sql->fetch();
        
        
        
        // alles neu in OOP
        
        $post = new PostModel();
        $post->id = $postArray["id"];
        $post->title = $postArray["title"];
        $post->content = $postArray["post"];
        return $post;
    }
}