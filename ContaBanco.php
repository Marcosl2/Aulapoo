<?Php


class ContaBanco
{
    //atributos
    public $nunConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Métodos

    public function abrirConta($t)
    {
        $this->setTipo($t);

        $this->setStatus(true);
        if ($t == 'CC') {
            $this->setSaldo(50);
        } elseif ($t == 'CP') {
            $this->saldo = 150;
        }
    }


    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo '<p> erro: conta continua com saldo positivo</p>';
        } elseif ($this->getSaldo() < 0) {
            echo '<p> erro: conta continua com saldo negativo</p>';
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo '<p> erro: conta fecha não consigo depositar</p>';
        }
    }

    public function sacar($v)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->saldo = $this->saldo - $v;
            } else {
                echo '<p> saldo insuficiente  para saque <p>';
            }
        } else {
            echo '<p> não posso sacar de uma conta fechada <p>';
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipo() == 'CC') {
            $v = 12;
        } else if ($this->getTipo() == 'CP') {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo '<p> problemas com a conta não posso cobrar </p>';
        }
    }

    //Métodos especiais

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo '<p> conta criada com sucesso!!! </p>';
    }

    public function getNumConta()
    {
        return  $this->nunConta;
    }

    public function setNunConta($n)
    {
        $this->nunConta = $n;
    }

    public function getTipo()
    {
        return  $this->tipo;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getDono()
    {
        return  $this->dono;
    }

    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($st)
    {
        $this->status = $st;
    }
}
