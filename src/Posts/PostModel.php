<?php

namespace App\Posts;
use ArrayAccess;

class PostModel implements ArrayAccess {
    
    
    public $id;
    public $title;
    public $post;
    
    public function getShortContent() {
        
        
        
        return "";
    }
    public function offsetGet($offset)
    {
        
      return $this->$offset;
    }

    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

}
