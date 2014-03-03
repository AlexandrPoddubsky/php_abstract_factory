<?php

require_once "abstract_factory.php";
require_once "abstract_factory_prototype.php";

class Car
{
    /** @var Engine */
    protected  $engine;
    /** @var Wheels */
    protected  $wheel;

    public function __construct(ICarPartsFactory $partsFactory)
    {
        $this->wheel = $partsFactory->createWheels();
        $this->engine = $partsFactory->createEngine();
    }

    public function pushAccelerator()
    {
        $this->wheel->incRotationalSpeed();
        $this->engine->incNoiseLevel();
    }

    public function getSpeedValue()
    {
        return $this->wheel->getRotationalSpeed();
    }
}

class CarProto extends Car
{
    public function __construct(CarPartsFactoryPrototype $partsFactoryPrototype, $type)
    {
        $this->wheel = $partsFactoryPrototype->makeCarPart($type . 'Wheels');
        $this->engine = $partsFactoryPrototype->makeCarPart($type . 'Engine');
    }
}