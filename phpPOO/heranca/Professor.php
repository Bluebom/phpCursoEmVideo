<?php
require_once 'Pessoa.php';
class Professor extends Pessoa
{
  private $especialidade;
  private $salario;


  public function __construct($nome, $idade, $sexo, $especialidade, $salario)
  {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setSexo($sexo);
    $this->setEspecia($especialidade);
    $this->setSalario($salario);
  }

  public function receberAumento($x)
  {
    $this->setSalario($this->getSalario() + $x);
  }

  private function setEspecia($e)
  {
    $this->especialidade = $e;
  }

  private function getEspecia()
  {
    return $this->especialidade;
  }

  private function setSalario($s)
  {
    $this->salario = $s;
  }

  private function getSalario()
  {
    return $this->salario;
  }
}
