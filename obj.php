<?php

class foo{
public $name;
public $color;

function vaical($name, $color){

}
function display(){
    echo 'This name of: {$this->name}';
    echo 'This color of: {$this->color}';
}

}
$obj=new foo();
$obj->color='red';
$obj->name='rifat';

$obj->display();
?>