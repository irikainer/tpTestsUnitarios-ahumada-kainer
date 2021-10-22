<?php
require_once 'EmpleadoTest.php';

class EmpleadoPermanenteTest extends EmpleadoTest
{
    public function crear($nombre = "Taylor", $apellido = "Swift", $dni = "28456133", $salario = "100000", $fechaIngreso = null)
    {
        $ee = new \App\EmpleadoPermanente($nombre, $apellido, $dni, $salario, $fechaIngreso);
        return $ee;
    }

    public function testSePuedeCrearYObtenerFechaIngreso() {
        $d = new DateTime('2006-06-19');
        $e = $this->crear("Kevin", "Ahumada", "12345678", "50000", $d);
        $this->assertEquals('2006-06-19', $e->getFechaIngreso()->format("Y-m-d"));
    }

    public function testSePuedeCrearYCalcularComision() {
        $d = new DateTime('2006-06-19');
        $e = $this->crear("Kevin", "Ahumada", "12345678", "50000", $d);
        $this->assertEquals("15%", $e->calcularComision());
    }

    public function testSePuedeCrearYCalcularIngresoTotal(){
      $d = new DateTime('2006-06-19');
      $e = $this->crear("Kevin", "Ahumada", "12345678", "50000", $d);
      $this->assertEquals("57500", $e->calcularIngresoTotal());
    }

    public function testSePuedeCrearYCalcularAntiguedad(){
      $d = new DateTime('2006-06-19');
      $e = $this->crear("Kevin", "Ahumada", "12345678", "50000", $d);
      $this->assertEquals("14", $e->calcularAntiguedad());
    }

    public function testSePuedeCrearSinFechaIngreso() {
        $e = $this->crear("Kevin", "Ahumada", "12345678", "50000");
        $today = date("Y-m-d");
        $this->assertEquals($today, $e->getFechaIngreso()->format("Y-m-d"));
        $this->assertEquals("0", $e->calcularAntiguedad());
    }

    public function testNoSePuedeCrearConFechaIngresoFutura(){
      $this->expectException(\Exception::class);
      $d = new DateTime('2022-01-01');
      $e = $this->crear("Kevin", "Ahumada", "12345678", "50000", $d);
    }


}
