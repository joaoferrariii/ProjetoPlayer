<?php

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname, int $nivel = 1) {
        $this->nickname = $nickname;
        $this->nivel = $nivel;
        $this->inventario = new Inventario();
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }

    public function setNickname(string $nickname) {
        $this->nickname = $nickname;
    }

    public function setNivel(int $nivel) {
        $this->nivel = $nivel;
    }

    public function setInventario(Inventario $inventario) {
        $this->inventario = $inventario;
    }

    public function coletarItem(Item $item): void {
        $this->inventario->adicionar($item);
    }
    

    public function soltarItem(Item $item): void {
        $this->inventario->remover($item);
    }

    public function subirNivel(): void {
        $this->nivel++;
        $aumentoCapacidade = $this->nivel * 3;
        $this->inventario->aumentarCapacidade($aumentoCapacidade);
        echo "João Ferrari agora está no nível {$this->nivel} e sua capacidade de inventário foi aumentada em {$aumentoCapacidade}.<br>";
    }
}
