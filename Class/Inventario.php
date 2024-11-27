<?php

class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeMaxima = 20) {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function getItens(): array {
        return $this->itens;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima) {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function setItens(array $itens) {
        $this->itens = $itens;
    }

    public function capacidadeLivre(): int {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $ocupado;
    }

    public function adicionar(Item $item): void {
        if ($item->getTamanho() <= $this->capacidadeLivre()) {
            $this->itens[] = $item;
            echo "Item '{$item->getName()}' adicionado com sucesso ao inventário.<br>";
        } else {
            echo "Erro ao coletar o item '{$item->getName()}'. Espaço insuficiente no inventário.<br>";
        }
    }
    
    public function remover(Item $item): void {
        foreach ($this->itens as $chave => $i) {
            if ($i === $item) {
                unset($this->itens[$chave]);
                echo "Item '{$item->getName()}' removido com sucesso do inventário.<br>";
                return;
            }
        }
        echo "Não foi possível remover o item '{$item->getName()}'. Ele não está no inventário.<br>";
    }

    public function aumentarCapacidade(int $valor): void {
        $this->capacidadeMaxima += $valor;
    }
}
