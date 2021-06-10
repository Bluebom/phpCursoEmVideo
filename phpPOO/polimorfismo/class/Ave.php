<?php
require_once 'Animal.php';
class Ave extends Animal
{
  private $corPena;

  public function __construct($p, $i, $m, $c)
  {
    $this->setPeso($p);
    $this->setIdade($i);
    $this->setMembros($m);
    $this->setCorPena($c);
  }

  public function locomovoer()
  {
    echo "<p>Voando</p>";
  }

  public function alimentar()
  {
    echo "<p>Comendo sementes</p>";
  }

  public function emitirSom()
  {
    echo "<p>Canto de ave</p>";
  }

  public function fazerNinho()
  {
    echo "<p>contruiu um ninho</p>";
  }

  protected function getCorPena()
  {
    return $this->corPena;
  }

  protected function setCorPena($corPena)
  {
    $this->corPena = $corPena;
  }
}
