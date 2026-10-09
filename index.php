<?php

class Produto
{
  private string $name;
  private float $price;

  public function __construct(string $name, float $price)
  {
    $this->name = $name;

    if ($price < 0) {
      throw new Exception("O preço não pode ser negativo");
    }

    $this->price = $price;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }
}

class ProdutoDigital extends Produto
{
  private float $fileSize;
  public function __construct(string $name, float $price, float $fileSize)
  {
    parent::__construct($name, $price);

    $this->fileSize = $fileSize;
  }

  public function getFileSize(): float
  {
    return $this->fileSize;
  }
}

class ProdutoFisico extends Produto
{
  private float $peso;

  public function __construct(
    string $nome,
    float $preco,
    float $peso
  ) {
    parent::__construct($nome, $preco);

    $this->peso = $peso;
  }

  public function getPeso(): float
  {
    return $this->peso;
  }
}

$fisico = new ProdutoFisico("Físico", 20.0, 32.2);
$digital = new ProdutoDigital("Digital", 26.0, 12.2);

echo "Dados do produto físico: " . "<br>";
echo $fisico->getName() . "<br>";
echo $fisico->getPrice() . "<br>";
echo $fisico->getPeso() . "<br>";

echo "<br><br>";

echo "Dados do produto digital: " . "<br>";
echo $digital->getName() . "<br>";
echo $digital->getPrice() . "<br>";
echo $digital->getFileSize() . "<br>";


