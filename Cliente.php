<?php
Class Cliente {
    private string $nome;
    private int $idade;
    private Conta $conta;
    private string $sexo;

    public function __construct($nome, $idade, $sexo, $conta) {
        $this->definirNome($nome);
        $this->definirIdade($idade);
        $this->definirSexo($sexo);
        $this->definirConta($conta);
    }

    public function definirNome(string $nome) {
        $this->nome = $nome;
    }
    public function retornarNome() {
        return $this->nome;
    }
    public function definirIdade(int $idade) {
        $this->idade = $idade;
    }
    public function retornarIdade() {
        return $this->idade;
    }
    public function definirSexo(string $sexo) {
        $this->sexo = $sexo;
    }
    public function definirConta(Conta $conta) {
        $this->conta = $conta;
    }
    public function retornarConta() {
        return $this->conta;
    }
}