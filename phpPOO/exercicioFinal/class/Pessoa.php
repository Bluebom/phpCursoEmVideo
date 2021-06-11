<?php
abstract class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;
  private $exp;

  protected function ganharExp($adicional)
  {
    $this->setExp($this->getExp() + $adicional);
  }

  protected function getNome()
  {
    return $this->nome;
  }

  protected function setNome($nome)
  {
    $this->nome = $nome;
  }

  protected function getIdade()
  {
    return $this->idade;
  }

  protected function setIdade($idade)
  {
    $this->idade = $idade;
  }

  protected function getSexo()
  {
    return $this->sexo;
  }

  protected function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }

  protected function getExp()
  {
    return $this->exp;
  }

  protected function setExp($exp)
  {
    $this->exp = $exp;
  }
}
