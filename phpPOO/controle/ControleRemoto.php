<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
  // Atributos
  private $volume;
  private $ligado;
  private $tocando;
  private $recuperaValor;

  // Métodos

  public function __construct()
  {
    $this->setVolume(50);
    $this->setLigado(false);
    $this->setTocando(false);
  }

  public function ligar()
  {
    $this->setLigado(true);
  }

  public function desligar()
  {
    $this->setLigado(false);
  }

  public function abrirMenu()
  {
    $ligado = $this->getLigado() ? "SIM" : "NÃO";
    echo "<p>Está ligado? $ligado</p>";
    echo "<p>Volume: " . $this->getVolume() . "</p>";
    $tocando = $this->getTocando() ? "SIM" : "NÃO";
    echo "<p>Está tocando? $tocando</p>";
    for ($i = 1; $i <= ($this->getVolume()); $i += 10) {
      echo '|';
    }
  }

  public function fecharMenu()
  {
    echo "<p>Fechando menu...</p>";
  }

  public function maisVolume()
  {
    if ($this->getLigado()) {
      if ($this->getVolume() < 100)
        $this->setVolume($this->getVolume() + 5);
    }
  }

  public function menosVolume()
  {
    if ($this->getLigado()) {
      if ($this->getVolume() > 0) {
        $this->setVolume($this->getVolume() - 5);
      }
    }
  }

  public function ligarMudo()
  {
    if ($this->getLigado() && $this->getVolume() > 0) {
      $this->setRecuperaValor($this->getVolume());
      $this->setVolume(-1);
    }
  }

  public function desligarMudo()
  {
    if ($this->getLigado() && $this->getVolume() == -1) {
      $this->setVolume($this->getRecuperaValor());
    }
  }

  public function play()
  {
    if ($this->getLigado() && !$this->getTocando()) {
      $this->setTocando(true);
    }
  }

  public function pause()
  {
    if ($this->getLigado && $this->getTocando()) {
      $this->setTocando(false);
    }
  }

  private function setVolume($v)
  {
    $this->volume = $v;
  }

  private function getVolume()
  {
    return $this->volume;
  }

  private function setLigado($l)
  {
    $this->ligado = $l;
  }

  private function getLigado()
  {
    return $this->ligado;
  }

  private function setTocando($t)
  {
    $this->tocando = $t;
  }

  private function getTocando()
  {
    return $this->tocando;
  }

  private function setRecuperaValor($r)
  {
    $this->recuperaValor = $r;
  }

  private function getRecuperaValor()
  {
    return $this->recuperaValor;
  }
}
