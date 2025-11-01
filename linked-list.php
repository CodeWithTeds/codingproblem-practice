
<?php

/**
 * done(15 min)
 */

class Node{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
    
    public function display(){
        $current = $this;

        while($current !== null){
            $current = $current;
            echo $current->data . ' -> ';
            $current = $current->next;
        }
        echo "NULL\n";
    }
}

$node1 = new Node(10); 
$node2 = new Node(20);
$node3 = new Node(30);

$node1->next = $node2;
$node2->next = $node3;

$node1->display();

