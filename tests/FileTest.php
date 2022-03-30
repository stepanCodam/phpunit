<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;

use TDD\SrcFile;


class FileTest extends TestCase{

public function testSum(){

    $obj = new SrcFile();
    $input = [0,2,5,8];
    $output = $obj->sum($input);
    $this->assertEquals(15,$output, 'When summing the total should equal 15');
    
}
public function testAgeCalc(){
    $obj = new SrcFile();
    $output = $obj->ageCalc(2021,1984);
    $this-> assertEquals(37,$output, 'Wrong age calculated, expected: 37');
}
public function testaverageVal(){
    $obj = new SrcFile();
    $input = [10,10,10,10,10,10,10];
    $output = $obj->averageVal($input);
    $this->assertEquals(5,$output,'Wrong average, it shpuld be 6');
}

}

?>