<?php

namespace App\Tests;
use App\Entity\Reservation;
use PHPUnit\Framework\TestCase;

class ReservationUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $resa = new Reservation();

        $resa->setIduser(1)
             ->setIdvehicule(2)
             ->setTemps(5)
             ->setPrix(500)
             ->setModelevehicule('test nom modele vehicule');

        $this->assertTrue($resa->getIduser()==1);
        $this->assertTrue($resa->getIdvehicule()==2);
        $this->assertTrue($resa->getTemps()==5);
        $this->assertTrue($resa->getPrix()==500);
        $this->assertTrue($resa->getModelevehicule()=='test nom modele vehicule');
    }
}
