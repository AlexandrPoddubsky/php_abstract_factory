<?php

abstract class Engine
{
    protected $noiseLevel;

    public function getNoiseLevel()
    {
        return $this->noiseLevel;
    }

   abstract public function incNoiseLevel();
}

abstract class Wheels
{
    protected $rotationalSpeed;

    public function getRotationalSpeed()
    {
        return $this->rotationalSpeed;
    }

    abstract public function incRotationalSpeed();
}