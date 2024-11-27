<?php

class Item {
    protected string $name;
    protected int $tamanho;
    protected string $classe;

    public function __construct(string $name, int $tamanho, string $classe) {
        $this->name = $name;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function getClasse(): string {
        return $this->classe;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setTamanho(int $tamanho) {
        $this->tamanho = $tamanho;
    }

    public function setClasse(string $classe) {
        $this->classe = $classe;
    }
}
