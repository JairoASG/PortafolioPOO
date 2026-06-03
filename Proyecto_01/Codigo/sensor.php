<?php
namespace src\Logistica;

class Sensor {
    // Propiedades públicas
    public int $id;
    public string $marca;
    public \DateTime $ultimaLectura;
    public float $rangoMaximo;
}