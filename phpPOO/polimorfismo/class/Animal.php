<?php
abstract class Animal
{
  private $peso;
  private $idade;
  private $membros;

  public abstract function locomovoer();
  public abstract function alimentar();
  public abstract function emitirSom();

  protected function getPeso()
  {
    return $this->peso;
  }

  protected function setPeso($peso)
  {
    $this->peso = $peso;
  }

  protected function getIdade()
  {
    return $this->idade;
  }

  protected function setIdade($idade)
  {
    $this->idade = $idade;
  }

  protected function getMembros()
  {
    return $this->membros;
  }

  protected function setMembros($membros)
  {
    $this->membros = $membros;
  }
}
