<?php

abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{

    public function testSePuedeCrearYObtenerNombreApellido()
    {
      $e = $this->crear();
      $this->assertEquals("Taylor Swift", $e->getNombreApellido());
    }

    public function testSePuedeCrearYObtenerDni() {
      $e = $this->crear();
      $this->assertEquals("28456133", $e->getDNI());
    }

    public function testSePuedeCrearYObtenerSalario() {
      $e = $this->crear();
      $this->assertEquals("100000", $e->getSalario());
    }

    public function testSePuedeCrearYObtenerSector() {
      $e = $this->crear();
      $this->assertEquals("No especificado", $e->getSector());
    }

    public function testSePuedeCrearYSetearSector() {
      $e = $this->crear();
      $e->setSector("Comercial");
      $this->assertEquals("Comercial", $e->getSector());
    }

    public function testSePuedeCrearYDevolverString() {
      $e = $this->crear();
      $this->assertEquals("Taylor Swift 28456133 100000", $e->__toString());
    }
}
