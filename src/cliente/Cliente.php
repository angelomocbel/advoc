<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author migue_000
 */
class Cliente {
    private $id;
    private $nome;
    private $rg;
    private $cpf;
    private $nascimento;
    private $estado_civil;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $email;
    private $obs;
    
    private $tabela = "cliente";
    private $campos = "nome, rg, cpf, nascimento, estado_civil, endereco, bairro, cidade, estado"
            . "telefone, celular, email, obs";
    
    public function getTabela() {
        return $this->tabela;
    }

    public function getCampos() {
        return $this->campos;
    }

    public function getValores(){
        return "'".$this->getNome()."', '".$this->getRg()."', '".
        $this->getNascimento()."', '".$this->getEstado_civil()."', '".
        $this->getEndereco()."', '".$this->getBairro()."', '".
        $this->getCidade()."', '".$this->getEstado()."', '".
        $this->getTelefone()."', '".$this->getCelular()."', '".
        $this->getEmail()."', '".$this->getObs()."'";
    }
    
    public function getValoresUpdate(){
        return "";
    }
    
     public function getId() {
        return $this->id;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function getEstado_civil() {
        return $this->estado_civil;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getObs() {
        return $this->obs;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }


    
}
