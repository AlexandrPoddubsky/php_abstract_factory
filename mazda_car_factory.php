<?php

class MazdaEngine extends Engine
{
    public function incNoiseLevel()
    {
        $this->noiseLevel += 1;
    }
}

class MazdaWheels extends Wheels
{
    public function incRotationalSpeed()
    {
        $this->rotationalSpeed += 1;
    }
}