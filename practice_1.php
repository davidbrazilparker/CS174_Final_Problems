<?php
#Give code declaring an abstract PHP class Foo within the namespace GooCom\Fud with a single method getFoo(). 
#Create a concrete subclass RealFoo which implements getFoo to return the string "foo".
namespace GooCom\Fud;

abstract class Foo{
    function getFoo();
}

class RealFoo extends Foo{
    public function getFoo(){
        return "foo";
    }
}

 ?>