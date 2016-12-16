<?php

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