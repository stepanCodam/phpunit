<?php

use PHPUnit\Framework\TestCase;
require_once "src/dog.php";

class dogTest extends TestCase {

    public function testBark(){
        $this->assertTrue(class_exists("dog"), "You must declare Dog class");
        $dog = new Dog();
        $this-> assertEquals("woof woof", $dog->bark(), "bark() must return 'woof woof");
    }

}

?>