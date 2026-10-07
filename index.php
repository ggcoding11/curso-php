<?php

$products = [
  [
    "name" => "Arroz",
    "price" => 20.0,
    "quantity" => 2
  ],
  [
    "name" => "Feijão",
    "price" => 8.0,
    "quantity" => 3
  ],
  [
    "name" => "Macarrão",
    "price" => 5.0,
    "quantity" => 4
  ]
];

function calcularSubtotal(float $preco, int $quantidade): float
{
  return $preco * $quantidade;
}

foreach ($products as $product) {
  echo $product["name"] . ": R$ " . calcularSubtotal($product["price"], $product["quantity"]) . "<br>";
}