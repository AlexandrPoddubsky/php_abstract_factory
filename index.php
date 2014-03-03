<?php
require_once 'car.php';

$toyotaCar = new Car(new ToyotaCarPartsFactory());
$toyotaCar->pushAccelerator();
$toyotaCar->pushAccelerator();
echo "Speed toyota car ";
echo $toyotaCar->getSpeedValue() . ' km/h <br>';

$mazdaCar = new Car(new MazdaCarPartsFactory());
$mazdaCar->pushAccelerator();
$mazdaCar->pushAccelerator();
echo "Speed mazda car ";
echo $mazdaCar->getSpeedValue() . ' km/h <br>';


$toyotaCarProto = new CarProto(new CarPartsFactoryPrototype(), 'Toyota');
$toyotaCarProto->pushAccelerator();
echo "Proto car speed value ";
echo $toyotaCarProto->getSpeedValue() . "km/h";