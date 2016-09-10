<?php
class A {
  public $closure;
}

class B {
  public function m(){
    echo 'x';
  }
}

$a = new A();

$a->closure = function() {

  $b = new B();
  return $b;
};


var_dump($a->closure);
