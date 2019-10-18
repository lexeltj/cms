<?php
namespace App\Core;
use App\Posts\PostsRepository;
use PDO;
use App\Posts\PostsController;

class Container {
    
    private $receipts = [];
    private $instances = [];
    
    
    public function __construct(){
        $this->receipts = [
            'postsController' => function()
            {
                return new PostsController(
                    $this->make('postsRepository')
                    );
            },
            'postsRepository' => function()
            {
                return new PostsRepository(
                    $this->make("myDB")
                    );
            },
            'myDB' => function(){
            $dsn = 'mysql:dbname=blog;host=127.0.0.1';
            $user = 'root';
            $password = '';
            
            $myDB = new PDO($dsn,$user,$password);
            
            $myDB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $myDB;
            }
        ];
    }
    
    public function make($name) {
        if (!empty($this->instances[$name])) {
            return $this->instances[$name];
        }
        
        if (isset($this->receipts[$name])) {
            $this->instances[$name] = $this->receipts[$name]();
        }
        
        
        return $this->instances[$name];
    }
  
    /*
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
    }*/
}