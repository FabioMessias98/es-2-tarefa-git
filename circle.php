<?php

class Circle {
	private $area;
	private $raio;

	//setter
	public function setArea($area) {
		$this->area = $area;
	}

	public function setRaio($raio) {
		$this->raio = $raio;
	}

	public function getArea() {
		return $this->area;
	}

	public function getRaio() {
		return $this->raio;
	}

	public function calcularArea($area, $pi) {
		return $pi * pow($area, 2);	
	}
}