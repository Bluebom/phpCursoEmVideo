<?php
abstract class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;

  public final function fazerAniv()
  {
    $this->setIdade($this->getIdade() + 1);
  }

  protected function setNome($var = null)
  {
    $this->nome = $var;
  }

  protected function getNome()
  {
    return $this->nome;
  }

  protected function setIdade($var = null)
  {
    $this->idade = $var;
  }

  protected function getIdade()
  {
    return $this->idade;
  }

  protected function setSexo($var = null)
  {
    $this->sexo = $var;
  }

  protected function getSexo()
  {
    return $this->sexo;
  }
}
