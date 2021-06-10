<?php
require_once "Aluno.php";
class Bolsista extends Aluno
{
  private $bolsa;

  public function __construct($n, $i, $s, $m, $c, $b)
  {
    $this->setNome($n);
    $this->setIdade($i);
    $this->setSexo($s);
    $this->setMatri($m);
    $this->setCurso($c);
    $this->setBolsa($b);
  }

  public function pagarMensalidade()
  {
    if ($this->getSexo() == "F")
      echo '<p>Pagando mensalidade da aluna (bolsista): ' . $this->getNome() . '</p>';
    else
      echo '<p>Pagando mensalidade do aluno (bolsista): ' . $this->getNome() . '</p>';
  }

  public function renovarBolsa()
  {
    echo '<p>Bolsa de:' . $this->getNome() . ' foi renovada</p>';
  }

  private function setBolsa($b)
  {
    $this->bolsa = $b;
  }

  private function getBolsa()
  {
    return $this->bolsa;
  }
}
