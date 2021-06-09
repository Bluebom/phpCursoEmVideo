<?php
class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;

  public function fazerAniver()
  {
    $this->idade++;
  }

  public function __construct($n, $i, $s)
  {
    $this->setNome($n);
    $this->setIdade($i);
    $this->setSexo($s);
  }

  private function setNome($n)
  {
    $this->nome = $n;
  }

  public function getNome()
  {
    return $this->nome;
  }

  private function setIdade($i)
  {
    $this->idade = $i;
  }


  private function getIdade()
  {
    return $this->idade;
  }

  private function setSexo($s)
  {
    $this->sexo = $s;
  }


  private function getSexo()
  {
    return $this->sexo;
  }
}
