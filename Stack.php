<?php


class Stack{
    public $stack = [];

    // add
    public function add($value)
    {
        $this->stack[] = $value;
        echo "{$value} is added in stack\n\n";
    }
    // pop
    public function pop()
    {
        if($this->isEmpty()){
            $del = $this->stack[count($this->stack)-1];
            unset($this->stack[count($this->stack)-1]);
            echo $del ." value is delete in stack.\n\n";
        }
    }
    // peek
    public function peek()
    {
        if($this->isEmpty()){
            echo "current stack top value: ". $this->stack[count($this->stack) - 1] . " \n\n";
        }else {
            echo "Stack is empty";
        }
    }
    // show
    public function top()
    {
        echo "Top index is: ". $this->stack[count($this->stack) - 1]. " \n\n";
    }
    // isempty
    public function isEmpty():bool
    {
        return count($this->stack);
    }

    public function stack()
    {
        //var_dump($this->stack);
        echo "Stack Data: \n";
        for($i = count($this->stack); $i > 0; $i--){
            echo $this->stack[$i]. "\n";
        }
        echo "\n\n";
    }
}

$stack = new Stack();
$stack->add(20);
$stack->peek();
$stack->pop();
$stack->peek();
$stack->add(50);
$stack->add(54);
$stack->stack();

