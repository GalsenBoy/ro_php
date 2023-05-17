<?php

class Point extends Cercle
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "(" . $this->x . " ," . $this->y . " )";
    }

    public function getPerimetre(): ?float
    {
        return (2 * 3.14 * $this->ray);
    }

    public function getSurface(): ?float
    {
        return (3.14 * pow($this->ray, 2));
    }

    public function belongs($p)
    {
        if ($p instanceof Point) {
            return "C'est un point";
        } else {
            return "Ce n'est pas un point";
        }
    }
}
