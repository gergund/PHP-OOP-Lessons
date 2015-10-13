<?php
/**
 * Created by PhpStorm.
 * User: dgergun
 * Date: 27.09.15
 * Time: 13:01
 */

class Node {

    public $value;
    public $parent;

    public function __construct ($item){
        $this->value = $item;
        $this->parent = null;
    }

}

class Tree {
    protected $root;

    public function __construct(){
        $this->root=null;
    }

    public function isEmpty(){
        return $this->root === null;
    }

    public function insert($item){
        $node = new Node($item);

        if ($this->isEmpty()) {
            $this->root = null;
        }
        else {

        }
    }
}