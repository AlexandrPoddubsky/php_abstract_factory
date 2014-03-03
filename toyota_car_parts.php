<?php

class ToyotaEngine extends Engine
{
    public function incNoiseLevel()
    {
        $this->noiseLevel += 3;
    }
}

class ToyotaWheels extends Wheels
{
    public function incRotationalSpeed()
    {
        $this->rotationalSpeed += 6;
    }
}