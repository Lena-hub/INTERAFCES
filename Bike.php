<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

// INTERFACE
// Ces méthodes seront implémentées par les véhicules possédant des éclairages comme Car et Bike

class  Bike extends Vehicle implements LightableInterface

{
    public function changeWheel()
    {
        return "change wheel of a bike";
    }


// INTERFACES
// Dans la classe Bike, où une dynamo est utilisée, switchOn() retourne true seulement si la currentSpeed() est >10km/h,
// tandis que switchOff() retourne toujours false


    public function switchOn()
    {
        if($this->currentSpeed >= 10)
        {
            return true;
        }
        return false;

    }

    public function switchOff()
        {
            return false;
        }

}

?>