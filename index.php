<?php

require_once('Class/Ataque.php');
require_once('Class/Defesa.php');
require_once('Class/Inventario.php');
require_once('Class/Item.php');
require_once('Class/Magia.php');
require_once('Class/Player.php');

echo "Inicializando o jogo...<br>";

$item1 = new Ataque("Espada");
$item2 = new Ataque("Machado");
$item3 = new Defesa("Escudo");
$item4 = new Defesa("Cota de Malha");
$item5 = new Magia("Bastão Mágico");
$item6 = new Magia("Varinha Mágica");

$player1 = new Player("João Ferrari");
$player2 = new Player("Letícia Borges");

echo "Adicionando itens ao inventário de João Ferrari um por um...<br>";

$player1->coletarItem($item1);
$player1->coletarItem($item2);
$player1->coletarItem($item3);
$player1->coletarItem($item4);
$player1->coletarItem($item5);
$player1->coletarItem($item6);

echo "________________________________________________________________<br>";

echo "<br>Itens no inventário de João Ferrari:<br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo "- {$item->getName()}<br>";
}

echo "________________________________________________________________<br>";

echo "<br>Soltando o item 'Espada' do inventário de João Ferrari...<br>";
$player1->soltarItem($item1);

echo "________________________________________________________________<br>";

echo "<br>Itens no inventário de João Ferrari após soltar o item 'Espada':<br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo "- {$item->getName()}<br>";
}

echo "__________________________________________________________________________<br>";

$player1->subirNivel();
echo "Capacidade máxima do inventário de João Ferrari: {$player1->getInventario()->getCapacidadeMaxima()}<br>";


echo "<br>Tentando adicionar mais itens após subir de nível...<br>";
$player1->coletarItem($item1);
$player1->coletarItem($item2);
$player1->coletarItem($item3);
$player1->coletarItem($item4);
$player1->coletarItem($item5);
$player1->coletarItem($item6);

echo "Itens no inventário de João Ferrari após subir de nível:<br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo "- {$item->getName()}<br>";

}

echo "________________________________________________________________<br>";

echo "<br>Adicionando itens ao inventário de Letícia Borges<br>";
$player2->coletarItem($item1);
$player2->coletarItem($item2);
$player2->coletarItem($item3);
$player2->coletarItem($item4);
$player2->coletarItem($item5);
$player2->coletarItem($item6);

echo "Itens no inventário de Letícia Borges:<br>";
foreach ($player2->getInventario()->getItens() as $item) {
    echo "- {$item->getName()}<br>";
}

?>
