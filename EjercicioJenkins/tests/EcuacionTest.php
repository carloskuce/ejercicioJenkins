<?php

namespace clases;

use PHPUnit\Framework\TestCase;

class EcuacionTest extends TestCase
{


    public function testEq()
    {
        $ecuador= new Ecuacion(1,2,3);
        $caso123= $ecuador->eq(4);
        $this->assertEquals(27,$caso123);

        $ecuador2= new Ecuacion(2,3,4);
        $caso234= $ecuador2->eq(5);
        $this->assertEquals(69,$caso234);


        $ecuador3= new Ecuacion(4,5,6);
        $caso456= $ecuador3->eq(7);
        $this->assertEquals(237,$caso456);


    }
}
