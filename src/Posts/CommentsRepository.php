<?php
namespace App\Posts;


use App\Core\AbstractRepository;
use PDO;

class CommentsRepository extends AbstractRepository {
    
    public function getTableName()
    {
        return "comments";
    }
    
    public function getModelName()
    {
        return "App\\Posts\\CommentModel";
    }
    
    public function insertForPost($post_id,$content)
    {
        $table = $this->getTableName();
        $stmt = $this->myDB->prepare("INSERT INTO {$table} (`content`,`post_id`) VALUES ( :content, :post_id);");
        $stmt->execute([
            'content' => $content,
            'post_id' => $post_id
        ]);
    }
    
    public function allByPosts($id)
    {
        $model = $this->getModelName();
        $table = $this->getTableName();
        
        $stmt = $this->myDB->prepare("SELECT * FROM {$table} WHERE post_id = :id");
        $stmt->execute(['id' => $id]);
        
        $comments = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        
        
        return $comments;
    }
    
}