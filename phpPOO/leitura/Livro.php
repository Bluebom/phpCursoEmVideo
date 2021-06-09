<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  public function __construct($t, $a, $tot, $l)
  {
    $this->setTitulo($t);
    $this->setAutor($a);
    $this->setTotPags($tot);
    $this->setLeitor($l);
    $this->setPagAtual(0);
  }

  public function detalhe()
  {
    echo "<p>Título: " . $this->getTitulo() . '</p>';
    echo "<p>Escrito por " . $this->getAutor() . "</p>";
    echo "<p>Páginas: " . $this->getTotPags() . '</p>';
    echo '<p><strong>' . $this->getTitulo() . "</strong> está sendo lido por <u>" . $this->getLeitor()->getNome() . '</u></p>';
    echo '<hr>';
  }

  public function abrir()
  {
    $this->setAberto(true);
  }
  public function fechar()
  {
    $this->setAberto(false);
  }
  public function folhear($p)
  {
    $diferenca = $this->getTotPags() - $this->getPagAtual();
    if ($this->getAberto() && $this->getPagAtual() < $this->getTotPags() && $this->getPagAtual() >= 0) {
      if ($diferenca > $p) {
        $this->setPagAtual($this->getPagAtual() + $p);
        echo '<p>Você chegou na página ' . $this->getPagAtual() . '</p>';
      } else {
        echo '<p>O máximo de páginas a serem folheadas é ' . $diferenca . '</p>';
      }
    } else {
      echo '<p>O máximo de páginas a serem folheadas é ' . $diferenca . '</p>';
    }
  }
  public function avancarPag()
  {
    if ($this->getAberto() && $this->getPagAtual() < $this->getTotPags()) {
      $this->setPagAtual($this->getPagAtual() + 1);
      echo '<p>Você está na página ' . $this->getPagAtual() . '</p>';
    }
  }
  public function voltarPag()
  {
    if ($this->getAberto() && $this->getPagAtual() > 0) {
      $this->setPagAtual($this->getPagAtual() + 1);
      echo '<p>Você está na página ' . $this->getPagAtual() . '</p>';
    }
  }

  private function setTitulo($t)
  {
    $this->titulo = $t;
  }

  private function getTitulo()
  {
    return $this->titulo;
  }

  private function setAutor($a)
  {
    $this->autor = $a;
  }

  private function getAutor()
  {
    return $this->autor;
  }

  private function setTotPags($t)
  {
    $this->totPaginas = $t;
  }

  private function getTotPags()
  {
    return $this->totPaginas;
  }

  private function setPagAtual($p)
  {
    $this->pagAtual = $p;
  }

  private function getPagAtual()
  {
    return $this->pagAtual;
  }

  private function setAberto($a)
  {
    $this->aberto = $a;
  }

  private function getAberto()
  {
    return $this->aberto;
  }

  private function setLeitor($l)
  {
    $this->leitor = $l;
  }

  private function getLeitor()
  {
    return $this->leitor;
  }
}
