<?php
/* INTERFACE */
interface Operacion
{
    public function Operar($razon_de_cambio);
}
/* COMPORTAMIENTOS */
class OperacionSuma implements Operacion{
    private $numero;
    public function __construct($numero)
    {
        $this->numero = $numero;
    }
    public function Operar($razon_de_cambio)
    {
        echo  ($this->numero + $razon_de_cambio);
    }
}
class OperacionResta implements Operacion{
    private $numero;
    public function __construct($numero)
    {
        $this->numero = $numero;
    }
    public function Operar($razon_de_cambio)
    {
        echo ($this->numero - $razon_de_cambio);
    }
}
class OperacionMultiplicacion implements Operacion{
    private $numero;
    public function __construct($numero)
    {
        $this->numero = $numero;
    }
    public function Operar($razon_de_cambio)
    {
        echo ($this->numero * $razon_de_cambio);
    }
}
/* SUPER CLASE*/
class Calculador
{
    public $resta;
    public $suma;
    public $multiplicar;
    public $numero;
    function __construct($numero)
    {
        $this->resta  = new OperacionResta($numero);
        $this->suma   = new OperacionSuma($numero);
        $this->multiplicar = new OperacionMultiplicacion($numero);
        $this->numero = $numero;
    }
    public function Operar($operacion, $razon_de_cambio){
        if ($operacion instanceof Operacion) {
              if ($operacion instanceof OperacionSuma) {
                $operacion->Operar($razon_de_cambio);
              }
              if ($operacion instanceof OperacionResta) {
                $operacion->Operar($razon_de_cambio);
              }
              if ($operacion instanceof OperacionMultiplicacion) {
                $operacion->Operar($razon_de_cambio);
              }
            }
            else{
              die("No me enviaste un operador");
            }
    }
}

$suma = new Calculador(15);
$suma->Operar($suma->suma, 20);
echo "<br>";
$multiplicacion = new Calculador(45);
$multiplicacion->Operar($multiplicacion->multiplicar, 10);










