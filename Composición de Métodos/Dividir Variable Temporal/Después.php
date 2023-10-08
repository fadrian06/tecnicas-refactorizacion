<?php

namespace DividirVariableTemporal\Antes;

class Rectangulo {
	function __construct(private int $ancho, private int $alto) {}

	function imprimirPerimetroYArea(): void {
		$perimetro = 2 * ($this->alto + $this->ancho);
		echo "Perímetro: $perimetro\n";
		$area = $this->alto * $this->ancho;
		echo "     Área: $area\n";
	}
}

$rectangulo = new Rectangulo(rand(1, 10), rand(1, 10));
$rectangulo->imprimirPerimetroYArea();
