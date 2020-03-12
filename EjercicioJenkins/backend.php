<?php
namespace clases;
$data=file_get_contents('php://input');
$data=json_decode($data,true);



use PHPUnit\Framework\TestCase;

require "vendor/autoload.php";

if(isset($data["valor1"])) {

    if (isset($data["valor2"])){
        if (isset($data["valor3"])){

            $a = $data["valor1"];
            $b = $data["valor2"];
            $c = $data["valor3"];
            $tabla="";
            for ($x = 0; $x < 10; $x++) {

                $result = new clases\Ecuacion($a,$b,$c);
                $result=$result->eq($x);

                $tabla.="<tr><td>".$x."</td>"."<td>".$result."</td></tr>";
            }

                echo $tabla;
        }else{
            echo "No hay valor3";
        }


    }else{
        echo "No hay valor2";
    }
}else{
    echo "No hay valor1";
}

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
