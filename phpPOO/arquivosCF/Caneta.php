<?php
class Caneta
{
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada = true;

  public function rabiscar()
  {
    $this->destampar();
    $this->ponta = 0.5;
    $this->carga = '90%';
    if ($this->tampada) {
      echo "<p>Não posso rabiscar!</p>";
    } else {
      echo "<p>Estou rabiscando...</p>";
    }
  }

  public function tampar()
  {
    $this->tampada = true;
  }

  protected function destampar()
  {
    $this->tampada = false;
  }
}
