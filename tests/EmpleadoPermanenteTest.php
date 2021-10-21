<?php
require_once 'EmpleadoTest.php';

class EmpleadoPermanenteTest extends EmpleadoTest
{
    public function crear($nombre = "Taylor", $apellido = "Swift", $dni = "28456133", $salario = 100000, \DateTime $fechaIngreso = null)
    {
        $ee = new \App\EmpleadoPermanente($nombre, $apellido, $dni, $salario, $fechaIngreso);
        return $ee;
    }
}
