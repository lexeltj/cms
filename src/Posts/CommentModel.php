<?php
namespace App\Posts;
use App\Core\AbstractModel;

class CommentModel extends AbstractModel {
    
    
    public $id;
    public $content;
    public $content_id;
    
    public function getShortContent() {
        
        
        
        return "";
    }
    
    
}