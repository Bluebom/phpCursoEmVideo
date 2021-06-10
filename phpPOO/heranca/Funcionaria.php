<?php
require_once 'Pessoa.php';
class Funcionaria extends Pessoa
{
  private $setor;
  private $trabalhando;

  public function __construct($nome, $idade, $sexo, $setor, $trabalhando)
  {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setSexo($sexo);
    $this->setSetor($setor);
    $this->setTrabalhando($trabalhando);
  }

  public function mudarTrabalho()
  {
    $this->setTrabalhando(!$this->getTrabalhando());
  }

  private function setSetor($s)
  {
    $this->setor = $s;
  }

  private function getSetor()
  {
    return $this->setor;
  }

  private function setTrabalhando($t)
  {
    $this->trabalhando = $t;
  }

  private function getTrabalhando()
  {
    return $this->trabalhando;
  }
}
