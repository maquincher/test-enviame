<?php


include_once("includes/conexion.php");
include_once("includes/class/estandar.class.php");

error_reporting(0);
require_once 'vendor/autoload.php';

require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

for ($i = 0; $i < 3; $i++) {

    $obj = new Estandar($db,0,'id','empresas');
    $obj->setProperty("nombre",$faker->name());
    $obj->setProperty("direccion",$faker->address());
    $obj->setProperty("represntante",$faker->company());

    $obj->commit();

}
