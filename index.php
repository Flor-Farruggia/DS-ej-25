<?php

require_once 'models/provincia.php';
require_once 'models/direccion.php';
require_once 'models/datoPersona.php';
require_once 'models/prestamo.php';
require_once 'models/lineaPrestamo.php';

$lp = new LineaPrestamo();
$lp->Id = 1;
$lp->Descripcion = 'Personal Sola Firma';
$lp->TasaEfectivaMensual= '15 %';

$prv = new Provincia();
$prv->Id = 1;
$prv->Descripcion = 'Santa Fe';


$dir = new Direccion();
$dir->Id = 1;
$dir->Calle = 'Montevideo';
$dir->Numero = 34;
$dir->Localidad = 'Rosario';
$dir->Provincia = $prv;

$dt = new DatosPersona(); 
$dt->Id = 1;
$dt->Nombre = 'Daniel';
$dt->Apellido ='Rodriguez';
$dt->Documento = 12456789;
$dt->Direccion = $dir;

$p = new Prestamo();
$p->Id = 1;
$p->LineaPrestamo = $lp;
$p->Titular = $dt;
$p->FechaAlta = '21/08/2019';
$p->CantidadCuotas = 36;
$p->MontoCapital = 10000;

$p->MostrarDatos();




