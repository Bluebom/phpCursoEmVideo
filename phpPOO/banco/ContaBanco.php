<?php
class ContaBanco
{
  // Attributes
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  // Methods
  public function __construct()
  {
    $this->setSaldo(0);
    $this->setStatus(false);
  }

  public function abrirConta($tipo)
  {
    $this->setTipo($tipo);
    $this->setStatus(true);
    if ($tipo == "CC") {
      $this->setSaldo(50);
    } elseif ($tipo == "CP") {
      $this->setSaldo(150);
    }
  }

  public function fecharConta()
  {
    if ($this->getSaldo() > 0) {
      $this->sacar($this->getSaldo());
      $this->setStatus(false);
      $this->setTipo(false);
      $this->setDono(false);
    } elseif ($this->getSaldo() < 0) {
      $this->depositar($this->getSaldo());
      $this->setStatus(false);
      $this->setTipo(false);
      $this->setDono(false);
    } else {
      $this->setStatus(false);
      $this->setTipo(false);
      $this->setDono(false);
    }
  }

  public function depositar($valor)
  {
    if ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() + $valor);
    } else {
      echo "<p>Impossívle depositar</p>";
    }
  }

  public function sacar($valor)
  {
    if ($this->getStatus()) {
      if ($this->getSaldo() >= $valor) {
        $this->setSaldo($this->getSaldo() - $valor);
      } else {
        echo "<p>Saldo insuficiente para saque!</p>";
      }
    } else {
      echo "<p>Conta não identificada!</p>";
    }
  }


  public function pagarMensa()
  {
    $v = 0;
    if ($this->getTipo() == "CC") {
      $v = 12;
    } elseif ($this->getTipo() == "CP") {
      $v = 20;
    }

    if ($this->getStatus()) {
      if ($this->getSaldo() > $v) {
        $this->setSaldo($this->getSaldo() - $v);
      } else {
        echo "<p>Saldo insuficiente para pagamento de mensalidade!</p>";
      }
    } else {
      echo "<p>Conta não identificada!</p>";
    }
  }

  public function setNumConta($n)
  {
    $this->numConta = $n;
  }

  public function getNumConta()
  {
    return $this->numConta;
  }

  public function setTipo($t)
  {
    $this->tipo = $t;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function setDono($d)
  {
    $this->dono = $d;
  }

  public function getDono()
  {
    return $this->dono;
  }

  public function setSaldo($s)
  {
    $this->saldo = $s;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  public function setStatus($s)
  {
    $this->status = $s;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
