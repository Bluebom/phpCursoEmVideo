<?php
require_once 'Lutador.php';
class Luta
{
  // Atributos
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  // Métodos

  public function marcarLuta($li, $lii)
  {
    if ($li->getCategoria() == $lii->getCategoria() && $li != $lii) {
      $this->setDesafiado($li);
      $this->setDesafiante($lii);
      $this->setAprovada(true);
      echo "<script>alert('Luta confirmada!')</script>";
    } else {
      $this->setAprovada(false);
      $this->setDesafiado(null);
      $this->setDesafiante(null);
      echo "<script>alert('Categorias incompatíveis!')</script>";
    }
  }

  public function lutar()
  {
    if ($this->getAprovada()) {
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor = rand(0, 2);
      switch ($vencedor) {
        case 0:
          echo "<p>" . $this->desafiado->getNome() . " e " . $this->desafiante->getNome() . " empatam a disputa</p>";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();

          break;

        case 1:
          echo "<p>" . $this->desafiado->getNome() . " é o vencedor dessa disputa</p>";
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
          break;

        case 2:
          echo "<p>" . $this->desafiante->getNome() . " é o vencedor dessa disputa</p>";
          $this->desafiado->perderLuta();
          $this->desafiante->ganharLuta();
          break;
      }
    } else {
      // print_r($this->getAprovada());
      echo "<script>alert('A luta não pode acontecer!')</script>";
    }
  }

  private function setDesafiado($do)
  {
    $this->desafiado = $do;
  }


  private function getDesafiado()
  {
    return $this->desafiado;
  }

  private function setDesafiante($de)
  {
    $this->desafiante = $de;
  }

  private function getDesafiante()
  {
    return $this->desafiante;
  }

  private function setRounds($r)
  {
    $this->rounds = $r;
  }


  private function getRounds()
  {
    return $this->rounds;
  }

  private function setAprovada($a)
  {
    $this->aprovada = $a;
  }


  private function getAprovada()
  {
    return $this->aprovada;
  }
}
