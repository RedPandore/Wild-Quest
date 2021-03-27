<?php

class car {
    private int $nbWheels;
    private int $currentSpeed ;
    private string $color ;
    private int $nbSeats ;
    private string $energy ;
    private int $energyLevel ;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;

        $this->nbSeats = $nbSeats;

        $this->energy = $energy;
    
    }

    public function getNbWheels(): int

    {
    
                return $this->nbWheels;
    
    }

    public function getCurrentSpeed(): int

    {

            return $this->currentSpeed;

    }

    public function getColor(): string

    {

            return $this->color;

    }

    public function getNbSeats(): int

    {

            return $this->nbSeats;

    }

    public function getEnergy(): string

    {

            return $this->energy;

    }

    public function getEnergyLevel(): string

    {

            return $this->energyLevel;

    }

/* DEMARRER */
public function run(): string

{
            $this->currentSpeed = 0;

            return "Demarrage";
}

/* AVANCER */

public function forward(): string

{
            $this->currentSpeed = 20;

            return "En avant";
}
/* FREINER */
public function brake(): string

{

            $sentence = "";

            while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $sentence .= "Freine !";

}

            $sentence .= "Arret";

            return $sentence;

}

}