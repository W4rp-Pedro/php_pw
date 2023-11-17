<?php

namespace App\model;

class Personagem {
   
    public $nome;
    public $arquetipo;
    public $level;
   
    function __construct($nome, $arquetipo, $level) {
        $this->nome = $nome;
        $this->arquetipo = $arquetipo;
        $this->level = $level;
    }
}
?>