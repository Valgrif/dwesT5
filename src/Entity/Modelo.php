<?php

namespace App\Entity;

class Modelo
{

	static function getModelo()
	{
		//Carga de los Modelo
		$articulos = array(
			0 => array(
				"id" => 0,
				"titulo" => "Monitor Samsung Odyssey",
				"a_imagen" => "samsungMonitor.jpg"
			),
			1 => array(
				"id" => 1,
				"titulo" => "Portátil Macbook Pro",
				"a_imagen" => "macbook.jpg"
			),
			2 => array(
				"id" => 2,
				"titulo" => "Teclado Logitech",
				"a_imagen" => "	teclado.jpg"
			),
			3 => array(
				"id" => 3,
				"titulo" => "Portátil Asus TUF",
				"a_imagen" => "	asus.jpg"
			)
		);

		return $articulos;
	}

	static function articulo($id)
	{
		$articulos = self::getModelo();
		$detalles = $articulos[$id];

		return $detalles;
	}

	static function sugerencias()
	{
		//Obtener usuario y sugerencia
		$listaSugerencias = array(
			array(
				"usuario" => "Pepe23",
				"sugerencia" => "Quiero precios más baratos"
			),
			array(
				"usuario" => "jjabrahms",
				"sugerencia" => "Mejoren la parte gráfica"
			),
			array(
				"usuario" => "plopez",
				"sugerencia" => "Poca variedad de ratones"
			)
		);

		return $listaSugerencias;
	}
}
