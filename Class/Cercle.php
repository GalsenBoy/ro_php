<?php

class Cercle
{
    protected $ray;
    private Point $point;

    public function __construct(int $ray, Point $p)
    {
        $this->point = $p;
        $this->$ray = $ray;
    }
}
