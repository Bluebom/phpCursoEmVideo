<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
  private $espectador;
  private $filme;

  public function __construct($espectador, $filme)
  {
    $this->setEspectador($espectador);
    $this->setFilme($filme);
    $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido() + 1);
    $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
  }

  protected function getEspectador()
  {
    return $this->espectador;
  }

  protected function setEspectador($espectador)
  {
    $this->espectador = $espectador;
  }

  protected function getFilme()
  {
    return $this->filme;
  }

  protected function setFilme($filme)
  {
    $this->filme = $filme;
  }
}
