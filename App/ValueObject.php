<?php


//namespace App;

class ValueObject

{
    /**
     * @throws Exception
     */
    public function __construct(private  int|float $red ,
                                private  int|float $green ,
                                private  int| float $blue ){
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);




}
    public function getRed(): int|float
    {
        return $this->red;
    }

    public function setRed(int|float $red): void
    {
        $this->red = $red;
        if ($red <0 || $red >255)
            throw new \Exception("Not a valid color.");

    }


    public function getGreen(): int|float
    {
        return $this->green;
    }

    public function setGreen(int|float $green): void
    {
        $this->green = $green;
        if ($green <0 || $green >255)
            throw new \Exception("Not a valid color.");

    }

    public function getBlue(): int|float
    {
        return $this->blue;
    }

    public function setBlue(int|float $blue): void
    {
        $this->blue = $blue;
        if ($blue <0 || $blue >255)
            throw new \Exception("Not a valid color.");
    }
    public function equals(ValueObject $color): bool
    {
        return $this->red === $color->getRed() &&
            $this->green === $color->getGreen() &&
            $this->blue === $color->getBlue();

    }


    static function rand():int|float
    {
        return rand(0,255);


    }
    public function mix()
    {
       $mixed=( $this->red+$this->rand())/2;
        $mixed1=($this->green+$this->rand())/2;
        $mixed2=($this->blue+$this->rand())/2;
        return new ValueObject (  $mixed ,$mixed1,$mixed2);

    }




}


