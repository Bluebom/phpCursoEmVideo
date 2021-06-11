<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo
{
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;

  public function __construct($titulo, $avaliacao = 1, $views = 0, $curtidas = 0)
  {
    $this->setTitulo($titulo);
    $this->setAvaliacao($avaliacao);
    $this->setViews($views);
    $this->setCurtidas($curtidas);
    $this->setReproduzindo(false);
  }

  public function play()
  {
    $this->setReproduzindo(true);
  }

  public function pause()
  {
    $this->setReproduzindo(false);
  }

  public function like()
  {
    $this->setCurtidas($this->getCurtidas() + 1);
  }

  protected function getTitulo()
  {
    return $this->titulo;
  }

  protected function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  protected function getAvaliacao()
  {
    return $this->avaliacao;
  }

  protected function setAvaliacao($avaliacao)
  {
    $this->avaliacao = $avaliacao;
  }

  public function getViews()
  {
    return $this->views;
  }

  public function setViews($views)
  {
    $this->views = $views;
  }

  protected function getCurtidas()
  {
    return $this->curtidas;
  }

  protected function setCurtidas($curtidas)
  {
    $this->curtidas = $curtidas;
  }

  protected function getReproduzindo()
  {
    return $this->reproduzindo;
  }

  protected function setReproduzindo($reproduzindo)
  {
    $this->reproduzindo = $reproduzindo;
  }
}
