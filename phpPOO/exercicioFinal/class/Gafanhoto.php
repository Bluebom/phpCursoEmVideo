<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa
{
  private $login;
  private $totAssistido;

  public function __construct($nome, $idade, $sexo, $login)
  {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setSexo($sexo);
    $this->setExp(0);
    $this->setLogin($login);
    $this->setTotAssistido(0);
  }

  public function viuMaisUm()
  {
  }

  protected function getLogin()
  {
    return $this->login;
  }

  protected function setLogin($login)
  {
    $this->login = $login;
  }

  public function getTotAssistido()
  {
    return $this->totAssistido;
  }

  public function setTotAssistido($totAssistido)
  {
    $this->totAssistido = $totAssistido;
  }
}
