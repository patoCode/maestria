<?php

class operacion
{
    private static $instancia;
    private $contar;

    private function __construct(){      
      $this->contar = 0;
    } 
    public static function invocarinstancia(){
        if (  !self::$instancia instanceof self){ 
         self::$instancia = new self;
        } 
      return self::$instancia;
    }
    public function sumar(){
        return ++$this->contar;
    }
    public function restar(){
       return --$this->contar;
   } 
}

$calculo = operacion::invocarinstancia();
echo "Invocar sumar: ".$calculo->sumar() . "\n";
echo "Invocar suma: ".$calculo->sumar() . "\n";
echo "Invocar resta: ".$calculo->restar() . "\n";
echo "Invocar resta: ".$calculo->restar() . "\n";