<?php
require_once 'EmpleadoTest.php';

class EmpleadoEventualTest extends EmpleadoTest
{
    public function crear($nombre = "Taylor", $apellido = "Swift", $dni = "28456133", $salario = "100000", array $montos = [2500, 5000, 30000])
    {
        $ee = new \App\EmpleadoEventual($nombre, $apellido, $dni, $salario, $montos);
        return $ee;
    }

    public function testSePuedeCalcularComision() {
      $e = $this->crear();
      $this->assertEquals(625, $e->calcularComision());
    }

    public function testSePuedeCalcularIngresoTotal() {
      $e = $this->crear();
      $this->assertEquals(100625, $e->calcularIngresoTotal());
    }

    public function testNoSePuedeCrearConMontosNegativosOCero() {
      $this->expectException(\Exception::class);
      $e = $this->crear("Irina", "Kainer", "12345678", "20000", [2000, -200, 4500]);
    }
}
