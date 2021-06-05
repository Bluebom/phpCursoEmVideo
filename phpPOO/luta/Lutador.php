<?php
class Lutador
{
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
  {
    $this->setNome($no);
    $this->setNacionalidade($na);
    $this->setIdade($id);
    $this->setAltura($al);
    $this->setPeso($pe);
    $this->setVitorias($vi);
    $this->setDerrotas($de);
    $this->setEmpates($em);
  }

  public function apresentar()
  {
    echo "<p>Lutador: " . $this->getNome() . "</p>";
    echo "Origem: " . $this->getNacionalidade();
    echo "<p>" . $this->getIdade() . " anos</p>";
    echo "<p>" . $this->getAltura() . "m de altura</p>";
    echo "<p>Pesando " . $this->getPeso() . "kg</p>";
    echo "<p>Ganhou " . $this->getVitorias() . " disputas ";
    echo "com " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.</p>";
    echo '<hr>';
  }

  public function status()
  {
    echo '<p>' . $this->getNome();
    echo ', ' . $this->getPeso() . 'kg';
    echo ', ' . $this->getVitorias() . ' vitórias';
    echo ', ' . $this->getDerrotas() . ' derrotas';
    echo ', ' . $this->getEmpates() . ' empates</p>';
  }

  public function ganharLuta()
  {
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta()
  {
    $this->setEmpates($this->getEmpates() + 1);
  }

  private function setNome($n)
  {
    $this->nome = $n;
  }

  private function getNome()
  {
    return $this->nome;
  }

  private function setNacionalidade($n)
  {
    $this->nacionalidade = $n;
  }

  private function getNacionalidade()
  {
    return $this->nacionalidade;
  }

  private function setIdade($n)
  {
    $this->idade = $n;
  }

  private function getIdade()
  {
    return $this->idade;
  }

  private function setAltura($n)
  {
    $this->altura = $n;
  }

  private function getAltura()
  {
    return $this->altura;
  }

  private function setPeso($n)
  {
    $this->peso = $n;
    $this->setCategoria($n);
  }

  private function getPeso()
  {
    return $this->peso;
  }

  private function setCategoria($n)
  {
    if ($n < 52.2) {
      $this->categoria = 'Inválido';
    } elseif ($n <= 70.3) {
      $this->categoria = 'Leve';
    } elseif ($n <= 83.9) {
      $this->categoria = 'Médio';
    } elseif ($n <= 120.2) {
      $this->categoria = 'Pesado';
    } else {
      $this->categoria = 'Invállido';
    }
  }

  private function getCategoria()
  {
    return $this->categoria;
  }

  private function setVitorias($n)
  {
    $this->vitorias = $n;
  }

  private function getVitorias()
  {
    return $this->vitorias;
  }

  private function setDerrotas($n)
  {
    $this->derrotas = $n;
  }

  private function getDerrotas()
  {
    return $this->derrotas;
  }

  private function setEmpates($n)
  {
    $this->empates = $n;
  }

  private function getEmpates()
  {
    return $this->empates;
  }
}
