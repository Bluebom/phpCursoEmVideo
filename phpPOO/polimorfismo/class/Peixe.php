<?php
require_once 'Animal.php';
class Peixe extends Animal
{
  private $corEscama;

  public function __construct($p, $i, $m, $c)
  {
    $this->setPeso($p);
    $this->setIdade($i);
    $this->setMembros($m);
    $this->setCorEscama($c);
  }

  public function locomovoer()
  {
    echo "<p>Nadando</p>";
  }

  public function alimentar()
  {
    echo "<p>Comendo frutinhas</p>";
  }

  public function emitirSom()
  {
    echo "<p>Peixe não faz som!</p>";
  }

  public function soltarBolha()
  {
    echo "<p>Soltou uma bolha</p>";
  }

  protected function getCorEscama()
  {
    return $this->corEscama;
  }

  protected function setCorEscama($corEscama)
  {
    $this->corEscama = $corEscama;
  }
}
