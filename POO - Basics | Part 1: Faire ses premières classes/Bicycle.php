<?php
class Bicycle

{
    private string $Color;


    private int $CurrentSpeed;


    private int $NbSeats;


    private int $NbWheels;


    public function __construct(string $Color, int $CurrentSpeed, int $NbSeats, int $NbWheels)
    {
        $this->Color = $Color;

        $this->CurrentSpeed = $CurrentSpeed;

        $this->NbSeats = $NbSeats;

        $this->NbWheels = $NbWheels;

    }




        public function forward(): string
        {
            $this->CurrentSpeed = 15;


            return "Go !";

        }


        public function brake(): string

{

            $sentence = "";

            while ($this->CurrentSpeed > 0) {

            $this->CurrentSpeed--;

            $sentence .= "Brake !!!";

}

            $sentence .= "I'm stopped !";

            return $sentence;

}

            public function getColor(): string

{

            return $this->color;

}

        public function setColor(string $Color): void

        {

            $this->Color = $Color;

        }


        public function getCurrentSpeed(): int

        {

            return $this->CurrentSpeed;

        }


        public function setCurrentSpeed(int $CurrentSpeed): void

        {
            if($CurrentSpeed >= 0) {

            $this->CurrentSpeed = $CurrentSpeed;

        }

        }


}

