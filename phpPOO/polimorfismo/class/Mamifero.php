<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
  private $corPelo;

  public function __construct($p, $i, $m, $c)
  {
    $this->setPeso($p);
    $this->setIdade($i);
    $this->setMembros($m);
    $this->setCorPelo($c);
  }

  public function locomovoer()
  {
    echo "<p>Correndo</p>";
  }

  public function alimentar()
  {
    echo "<p>Mamando</p>";
  }

  public function emitirSom()
  {
    echo "<p>Som de mamífero</p>";
  }

  protected function setCorPelo($cp)
  {
    $this->corPelo = $cp;
  }

  protected function getCorPelo()
  {
    return $this->corPelo;
  }
}
