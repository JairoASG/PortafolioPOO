<?php
// Importar las clases
require_once __DIR__ 'src/Logistica/Paquete.php';
require_once __DIR__ 'src/Logistica/Sensor.php';

// Instanciar dos objetos de la clase Paquete
$paqueteA = new Paquete();
$paqueteB = new Paquete();

// Asignar valores a las propiedades públicas del $paqueteA
$paqueteA->codigoSeguimiento = "FD2026-001";
$paqueteA->pesoKilogramos = 2.5;
$paqueteA->esFragil = true;

// Instanciar un objeto Sensor
$sensor = new Sensor();
$sensor->id = 1;
$sensor->marca = "FastDelivery";
$sensor->ultimaLectura = new \DateTime();
$sensor->rangoMaximo = 100.0;