<?php

class foo{
public $name;
public $color;

function vaical($name, $color){
  $this->name=$name;
  $this->color=$color;
}
function display(){
    echo "This name of: {$this->name} <br />";
    echo "This color of: {$this->color}";
}

}
$obj=new foo();
// $obj->color='red';
// $obj->name='rifat';

$obj->vaical('rafi', 'white');

$obj->display();
?>