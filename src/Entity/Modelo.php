<?php

namespace App\Entity;

if(!defined('CON_CONTROLADOR')) die ("<h1>No se puede llamar este archivo </h1>");

class Modelo
{		
	/**
	 * getModelo
	 *
	 * @return $articulos Retorna array con todos los articulos
	 */

	static function getModelo()
	{

		//Carga de los Modelo
		$articulos = array(
			0 => array(
				"id" => 0,
				"titulo" => "Monitor Samsung Odyssey",
				"descripcion" => "Monitor Gaming curvo",
				"detalle" => "El monitor Samsung Odyssey QLED cuenta con un panel VA de 49 pulgadas y 32:9 con curvatura 1000R y resolución Dual WQHD para una increíble inmersión en los juegos. Un rendimiento superior (1 ms, 240 Hz, FreeSync Premium Pro, compatibilidad con G-Sync), colores intensos e imagen HDR1000 te están esperando.",
				"a_imagen" => "samsungMonitor.jpg"
			),
			1 => array(
				"id" => 1,
				"titulo" => "Portátil Macbook Pro",
				"descripcion" => "Portatil de 14 pulgadas Apple",
				"detalle" => "El MacBook Pro de 14 pulgadas incluye el nuevo chip M2, que lo convierte en un titán. Ofrece hasta 20 horas de autonomía1 y un sistema de refrigeración activa para mantener un ritmazo incluso en tareas muy complejas. Y qué decir de la cámara FaceTime HD, la pantalla Retina y los micros con calidad de estudio. Además, su diseño compacto es ideal para trabajar donde sea. Tira millas.",
				"a_imagen" => "macbook.jpg"
			),
			2 => array(
				"id" => 2,
				"titulo" => "Teclado Logitech",
				"descripcion" => "Pack teclado y raton inalambrico",
				"detalle" => "Logitech G G502 X Plus Lightspeed Ratón Inalámbrico RGB Gaming Negro 25600 DPI",
				"a_imagen" => "	teclado.jpg"
			),
			3 => array(
				"id" => 3,
				"titulo" => "Portátil Asus TUF",
				"descripcion" => "Portatil Asus GAMING",
				"detalle" => "Diseñado para juegos serios y con un estilo nuevo y elegante, TUF Gaming F15 es un portátil para juegos repleto de funciones con el poder de llevarte a la victoria. Con hasta GPU GeForce RTX ™ 3060 ofrece un juego fluido en una pantalla de hasta 240Hz con 100% sRGB, mientras que la potente hasta CPU Intel Core i5 se ve reforzada por una refrigeración mejorada que amplifica el rendimiento de la CPU y mantiene la acústica sigilosa. Una batería de 90 Wh de larga duración junto con la durabilidad de grado militar de TUF te mantiene en tu mejor juego en cualquier lugar.",
				"a_imagen" => "	asus.jpg"
			)
		);

		return $articulos;
	}
	
	/**
	 * articulo
	 *
	 * @param  mixed $id
	 * @return $detalles Retorna datos del articulo cuyo id coincida
	 */
	static function articulo($id)
	{
		$articulos = self::getModelo();
		$detalles = $articulos[$id];

		return $detalles;
	}
	
	/**
	 * sugerencias
	 *
	 * @return $listaSugerencias Retorna array con las sugerencias
	 */
	static function sugerencias()
	{

		$listaSugerencias = array(
			array(
				"usuario" => "Arturo",
				"sugerencia" => "Precios elevados"
			),
			array(
				"usuario" => "Miguel",
				"sugerencia" => "Poco intuitivo"
			),
			array(
				"usuario" => "Maria",
				"sugerencia" => "Poca variedad"
			)
		);

		return $listaSugerencias;


		//Obtener usuario y sugerencia
	}
}
