<?php

require_once 'car_parts.php';

class CarPartsFactoryPrototype
{
    private $carPartCatalog;

    protected function addCarPart($type, $object)
    {
        $this->carPartCatalog[$type] = $object;
    }

    public  function makeCarPart($type)
    {
        return $this->carPartCatalog[$type];
    }

    public function __construct()
    {
        $this->addCarPart('ToyotaEngine', new ToyotaEngine());
        $this->addCarPart('ToyotaWheels', new ToyotaWheels());
        $this->addCarPart('MazdaEngine', new MazdaEngine());
        $this->addCarPart('MazdaWheels', new MazdaWheels());
    }
}