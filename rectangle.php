<?php

class Rectangle {
	private $base;
	private $altura;

	//setter
	public function setBase($base) {
		$this->base = $base;
	}

	public function setAltura($altura) {
		$this->altura = $altura;
	}

	//getter
	public function getBase() {
		return $this->base;
	}

	public function getAltura() {
		return $this->altura;
	}

	public function calcularArea($base, $altura) {
		return $base * $altura;
	}

	public function calcularPerimetro($base, $altura) {
		return ($base + $altura) * 2;
	}
}