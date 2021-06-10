<?php
require_once 'Animal.php';
class Reptil extends Animal
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
    echo "<p>Rastejando</p>";
  }

  public function alimentar()
  {
    echo "<p>Comendo de tudo!!!</p>";
  }

  public function emitirSom()
  {
    echo "<p>Som de reptil.</p>";
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
