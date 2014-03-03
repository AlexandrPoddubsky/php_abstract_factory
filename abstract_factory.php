<?php

require_once "car_parts.php";
require_once "toyota_car_parts.php";
require_once "mazda_car_factory.php";

interface ICarPartsFactory
{
    public function createEngine();
    public function createWheels();
}

class ToyotaCarPartsFactory implements ICarPartsFactory
{
    public function createEngine()
    {
        return new ToyotaEngine();
    }

    public function createWheels()
    {
        return new ToyotaWheels();
    }
}

class MazdaCarPartsFactory implements ICarPartsFactory
{
    public function createEngine()
    {
        return new MazdaEngine();
    }

    public function createWheels()
    {
        return new MazdaWheels();
    }
}