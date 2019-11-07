<?php
namespace App\Posts;


use App\Core\AbstractController;

class PostsController extends AbstractController {
    
    
    public function __construct(PostsRepository $postsRepository, CommentsRepository $commentsRepository)
    {
        $this->postsRepository = $postsRepository;
        $this->commentsRepository = $commentsRepository;
    }
    
   
    
    
    public function index() 
    {
        $posts = $this->postsRepository->all();
      
        $this->render("post/index", ['posts' => $posts]);
        
        //echo "<h1>Postindex wurde ausgeführt</h1>";
    }
    
    public function show()
    {
        $id = $_GET["id"];
        $post = $this->postsRepository->find($id);
        $comments = $this->commentsRepository->allByPosts($id);
        
        $this->render("post/post", [
            'post' => $post,
            'comments' => $comments
            
        ]);
        
       //include __DIR__ . "/../../views/post/post.php";
       //echo "wird ausgefuert";
    }
}