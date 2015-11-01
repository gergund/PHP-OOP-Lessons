<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 01.11.2015
 * Time: 15:32
 */

abstract class Stack {

    abstract function Pop();

    abstract function Push($item);

}

class Array_Stack extends Stack {

    protected $stack = array ();

    public function Pop(){
        return array_pop($this->stack);
    }

    public function Push($item){

        $this->stack[] = $item;
    }
}

$stack = new Array_Stack();
$stack->Push("first element");
$stack->Push("second element");

if ($stack instanceof Stack){
    echo($stack->Pop()."\n");
    echo($stack->Pop()."\n");
}