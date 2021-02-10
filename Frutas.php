<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Frutas
 *
 * @author 12179943601
 */
class Frutas {
    private $cor;
    private $nome;
    private $peso;
    
    public function __construct($cor,$nome,$peso="5Kg") {
        $this->cor = $cor;
        $this->nome = $nome;
        $this->peso = $peso;
    }
    
    public function getCor() {
        return $this->cor;
    }
    public function setCor($cor) {
        $this->cor = $cor;
    }
        
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }
        
    
}
