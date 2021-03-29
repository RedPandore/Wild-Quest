<?php

require_once 'Vehicle.php';


class Truck extends Vehicle

{
        public const ALLOWED_ENERGIES = [
                'fuel',     
                'electric',        
            ];

    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;

    private int $actualCapacity;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
{
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    $this->storageCapacity = $storageCapacity;
}




    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }




    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }



    public function getstorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setstorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }



    public function getactualCapacity(): int
    {
        return $this->actualCapacity;
    }

    public function setactualCapacity(int $actualCapacity): void
    {
        $this->actualCapacity = $actualCapacity;
    }



    public function emptyorfull(): string
    {
        
     if($this->actualCapacity < $this->storageCapacity) {

            return "in filling";
        } else{
            return "full";
        }
        
    }


}

