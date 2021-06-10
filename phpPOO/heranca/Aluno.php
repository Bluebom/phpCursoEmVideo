<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
  private $matr;
  private $curso;

  public function __construct($nome, $idade, $sexo, $matr, $curso)
  {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setSexo($sexo);
    $this->setMatr($matr);
    $this->setCurso($curso);
  }

  public function cancelarMatr()
  {
  }

  private function setMatr($m)
  {
    $this->matr = $m;
  }

  private function getMatr()
  {
    return $this->matr;
  }


  private function setCurso($c)
  {
    $this->curso = $c;
  }

  private function getCurso()
  {
    return $this->curso;
  }
}
