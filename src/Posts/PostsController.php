<?php
namespace App\Posts;


class PostsController {
    
    
    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }
    
    protected function render($view, $params) {
        
        foreach ($params as $key => $value) {
            ${$key} = $value;
        }
        
 
       
       
        include __DIR__ . "/../../views/{$view}.php";
    }
    
    
    public function index() 
    {
        $posts = $this->postsRepository->fetchPost();
      
        $this->render("post/index", ['posts' => $posts]);
        
        //echo "<h1>Postindex wurde ausgeführt</h1>";
    }
    
    public function show($id)
    {
        $post = $this->postsRepository->fetchPosts($id);
        
        
        $this->render("post/post", ['post' => $post]);
        
       //include __DIR__ . "/../../views/post/post.php";
       //echo "wird ausgefuert";
    }
}