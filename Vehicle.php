<?php

abstract class vehicle {

    protected string $color ;
    protected int $nbSeats ;
    protected int $currentSpeed;

    public function __construct(string $color,int $nbSeats, int $currentSpeed = 8)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }


    abstract public function changeWheel();
}