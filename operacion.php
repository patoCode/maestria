<?php
// Se creo una interfaz llamada Operacion, el cual agrupara por comportamiento las operaciones

interface OperacionSuma{
    public function doSuma($numero);
}
interface OperacionResta{
    public function doResta($numero);
}
abstract class Operacion
{ 
    public $numero;
    public function __construct($numero)
    {
        $this->numero = $numero;
    }
}

class Suma extends Operacion implements OperacionSuma{    
    public function __construct($numero){
        parent::__construct($numero);
    }
    public function doSuma($sumando){
        echo "SUMA ".$this->numero." + ".$sumando." = ".($this->numero+$sumando);
    }    
}
class Resta extends Operacion implements OperacionResta{
    public function __construct($numero){
        parent::__construct($numero);
    }
    public function doResta($sustraendo){
        echo "RESTA ".$this->numero." - ".$sustraendo." = ".($this->numero-$sustraendo);
    }
}

function operar($operacion, $numero_para_operar) {
    if ($operacion instanceof Operacion) {
      if ($operacion instanceof OperacionSuma) {
        $operacion->doSuma($numero_para_operar);
      }
      if ($operacion instanceof OperacionResta) {
        $operacion->doResta($numero_para_operar);
      }       
    } else {
      die("No me enviaste un operador");
    }
}


echo "===========================\n";
echo "OPERACIONES SUMA Y RESTA\n";
echo "===========================\n";
$razon_de_cambio = 10;
$operaciones = array(
    new Suma(20),
    new Suma(15),
    new Resta(150),
    new Suma(1),
    new Suma(30),
    new Resta(5),
    new Resta(15)
  );
foreach($operaciones as $operacion) 
{
    operar($operacion,$razon_de_cambio);
    echo "\n";
}