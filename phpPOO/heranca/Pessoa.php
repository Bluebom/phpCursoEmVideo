<?php
class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;

  public function fazerAniversario()
  {
    $this->setIdade($this->getIdade() + 1);
  }

  protected function setNome($x)
  {
    $this->nome = $x;
  }

  protected function getNome()
  {
    return $this->nome;
  }

  protected function setIdade($x)
  {
    $this->idade = $x;
  }

  protected function getIdade()
  {
    return $this->idade;
  }

  protected function setSexo($x)
  {
    $this->sexo = $x;
  }

  protected function getSexo()
  {
    return $this->sexo;
  }
}
