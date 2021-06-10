<?php
require_once "Pessoa.php";
class Aluno extends Pessoa
{
  private $matri;
  private $curso;

  public function __construct($n, $i, $s, $m, $c)
  {
    $this->setNome($n);
    $this->setIdade($i);
    $this->setSexo($s);
    $this->setMatri($m);
    $this->setCurso($c);
  }

  public function pagarMensalidade()
  {
    if ($this->getSexo() == "F")
      echo '<p>Pagando mensalidade da aluna: ' . $this->getNome() . '</p>';
    else
      echo '<p>Pagando mensalidade do aluno: ' . $this->getNome() . '</p>';
  }

  protected function setMatri($m)
  {
    $this->matri = $m;
  }

  protected function getMatri()
  {
    return $this->matri;
  }

  protected function setCurso($c)
  {
    $this->curso = $c;
  }

  protected function getCurso()
  {
    return $this->curso;
  }
}
