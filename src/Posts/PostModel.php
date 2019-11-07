<?php

namespace App\Posts;
use App\Core\AbstractModel;

class PostModel extends AbstractModel {
    
    
    public $id;
    public $title;
    public $post;
    
    public function getShortContent() {
        
        
        
        return "";
    }
   

}
