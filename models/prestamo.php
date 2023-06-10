<?php

class Prestamo {
    public $Id;
    public $LineaPrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;

    public function MostrarDatos(){
        echo 'La información del prestamos es: '.'<br>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Sobre la linea de préstamo: '.'<br>';
        echo 'ID: '.$this->LineaPrestamo->Id.'<br>';
        echo 'Descripción: '.$this->LineaPrestamo->Descripcion.'<br>';
        echo 'Tasa Efectiva Anual: '.$this->LineaPrestamo->TasaEfectivaMensual.'<br>';
        echo 'Información sobre el titular: '.'<br>';
        echo 'ID: '.$this->Titular->Id.'<br>';
        echo 'Nombre: '.$this->Titular->Nombre.'<br>';
        echo 'Apellido: '.$this->Titular->Apellido.'<br>';
        echo 'Documento: '.$this->Titular->Documento.'<br>';
        echo 'Dirección: '.$this->Titular->Direccion.'<br>';
        echo 'La fecha de alta es: '.$this->FechaAlta.'<br>';
        echo 'La cantidad de cuotas son: '.$this->CantidadCuotas.'<br>';
        echo 'El monto capital es: '.$this->MontoCapital.'<br>';
    }
}