<?php

class Cercle
{
    protected $center;
    protected $ray;

    public function __construct(int $center, int $ray)
    {
        $this->center = $center;
        $this->$ray = $ray;
    }
}
