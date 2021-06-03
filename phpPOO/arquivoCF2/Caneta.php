<?php
class Caneta
{
  // attributes
  public $modelo;
  public $cor;
  private $ponta;
  private $tampada;

  // Constructor 
  public function __construct($m, $c, $p) //also can use "Caneta"
  {
    $this->setModelo($m);
    $this->cor = $c;
    $this->setPonta($p); //imagina se fosse um método enorme
    $this->tampar();
  }

  // Methods
  public function tampar()
  {
    $this->tampada = true;
  }

  public function getModelo()
  {
    return $this->modelo;
  }

  public function setModelo($m)
  {
    $this->modelo = $m;
  }

  public function getPonta()
  {
    return $this->ponta;
  }

  public function setPonta($p)
  {
    $this->ponta = $p;
  }
}
