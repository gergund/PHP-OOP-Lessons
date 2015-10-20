<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.10.2015
 * Time: 19:13
 */

class Stack {

    //LIFO stack example
    protected $stack = array();

    public function Push($item){
        $this->stack[] = $item;
    }

    public function Pop(){
        return array_pop($this->stack);
    }



}

$stack = new Stack();

$stack->Push("first element");
$stack->Push("second element");
$stack->Push("third element");

var_dump($stack);

$last = $stack->Pop();
printf("Last stack element: %s\n", $last);

var_dump($stack);

//no element in stack
for($i=0;$i<3;$i++){
    $last = $stack->Pop();
    printf("Last stack element: %s\n", $last);
}

//new extended implementation

class NewStack extends Stack {

    public function isEmpty(){
        return empty($this->stack);
    }

    public function Pop(){
        if($this->isEmpty()){
            throw new RuntimeException("Stack is empty");
        }
        else {
            return array_pop($this->stack);
        }
    }

}

$stack = new NewStack();

$stack->Push("first element");
$stack->Push("second element");
$stack->Push("third element");

for($i=0;$i<4;$i++){
    $last = $stack->Pop();
    printf("Last stack element: %s\n", $last);
}
