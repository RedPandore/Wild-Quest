<?php

require_once 'Vehicle.php';


class Car extends Vehicle

{
        public const ALLOWED_ENERGIES = [

                'fuel',
        
                'electric',
        
            ];

        private string $energy;


        private int $energyLevel;


        public function __construct(string $color, int $nbSeats, string $energy)

    {
        parent::__construct($color, $nbSeats);

        $this->setEnergy($energy);
    }


        public function getEnergy(): string

    {

            return $this->energy;

    }


        public function setEnergy(string $energy): Car

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
    

        private bool $hasParkBrake = true;

        public function setParkBrake(bool $hasParkBrake)
    {

        $this->hasParkBrake = $hasParkBrake;

    }



        public function getParkBrake(): bool
    {

        return $this->hasParkBrake;

    }


        public function start()
    {
        try {
            if ($this->hasParkBrake === true) {
                throw new Exception("Le frein a main est enclenché <br/>");     
            }
        }
            catch(Exception $e){
                echo "Erreur : ". $e->getMessage();
                $this->setParkBrake(false);
            } finally {
                echo "Ma voiture roule comme un donut \n";
            }
    }

}


