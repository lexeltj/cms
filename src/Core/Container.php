<?php
namespace App\Core;
use App\Posts\PostsRepository;
use PDO;

class Container {
    
    private $myDB;
    private $postsRepository;
    
    public function getPdo() {
        
        
        if (!empty($this->myDB)) {
            return $this->myDB;
        }
        
        
        $dsn = 'mysql:dbname=blog;host=127.0.0.1';
        $user = 'root';
        $password = '';
        
        $this->myDB = new PDO($dsn,$user,$password);
        
        $this->myDB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
        
        return $this->myDB;
    }
    public function getPostsRepository(){
        
        if (!empty($this->postsRepository)) {
            return $this->postsRepository;
        }
        
        $this->postsRepository = new PostsRepository($this->getPdo());
        return $this->postsRepository;
    }
}