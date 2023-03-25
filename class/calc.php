<?php 

class calc
{   
    public $quantidade;
    public $altura;
    public $largura;
    public $profundidade;
    public $fatorCubagem;
    public $volumes;
    
    public $resultado;

    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($qtd){
        $this->quantidade =  $qtd;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    
    public function setAltura($alt)
    {
        $this->altura = $alt;
    }

    public function getLargura()
    {
        return $this->largura;
    }
    public function setLargura($lar)
    {
        $this->largura = $lar;
    }

    public function getProfundidade()
    {
        return $this->profundidade;
    }
    public function setProfundidade($prof)
    {
        $this->profundidade = $prof;
    }

    public function getFatorCubagem()
    {
        return $this->fatorCubagem;
    }
    public function setFatorCubagem($fator)
    {
        $this->fatorCubagem = $fator;
    }
    
    public function getVolumes()
    {
        return $this->volumes;
    }
    public function setVolumes($vol)
    {
        $this->volumes = $vol;
    }

    public function getResultado(){
        return $this->resultado;
    }
    public function setResultado($result)
    {
        $this->resultado = $result;
    }

    public function calcular()
    { 
        $this->setResultado($this->getQuantidade() * $this->getAltura() * $this->getLargura() * $this->getProfundidade() * $this->getFatorCubagem());
        echo $resultt = $this->getResultado(); 
    }
    
    
}




?>