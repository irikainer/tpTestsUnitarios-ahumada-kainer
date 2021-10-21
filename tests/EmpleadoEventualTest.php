<?php
require_once 'EmpleadoTest.php';

class EmpleadoEventualTest extends EmpleadoTest
{
    public function crear($nombre = "Taylor", $apellido = "Swift", $dni = "28456133", $salario = 100000, array $montos = [2500, 5000, 30000])
    {
        $ee = new \App\EmpleadoEventual($nombre, $apellido, $dni, $salario, $montos);
        return $ee;
    }
}
