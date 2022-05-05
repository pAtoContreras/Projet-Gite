<?php

namespace App\DataFixtures;

use App\Entity\Services;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ServFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $serv = new Services();
        $serv->setNomService('Location de linge');
        $serv->setCoutService(rand(5,20));
        $manager->persist($serv);

        $serv = new Services();
        $serv->setNomService('Ménage en fin de séjour');
        $serv->setCoutService(rand(5,20));
        $manager->persist($serv);

        $serv = new Services();
        $serv->setNomService('Accés internet');
        $serv->setCoutService(rand(5,20));
        $manager->persist($serv);

        $manager->flush();
    }
}
