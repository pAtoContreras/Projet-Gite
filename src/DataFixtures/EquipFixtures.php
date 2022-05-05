<?php

namespace App\DataFixtures;

use App\Entity\Equipements;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $equip = new Equipements();
        $equip->setNomEquipement('Lave-vaisselle');
        $equip->setTypeEquipement('Interieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Lave-Linge');
        $equip->setTypeEquipement('Interieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Climatisation');
        $equip->setTypeEquipement('Interieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Télévision');
        $equip->setTypeEquipement('Interieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Terasse');
        $equip->setTypeEquipement('Exterieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Barbecue');
        $equip->setTypeEquipement('Exterieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Piscine privée');
        $equip->setTypeEquipement('Exterieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Piscine collective');
        $equip->setTypeEquipement('Exterieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Tennis');
        $equip->setTypeEquipement('Exterieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);

        $equip = new Equipements();
        $equip->setNomEquipement('Ping-pong');
        $equip->setTypeEquipement('Exterieur');
        $equip->setCout(rand(5,20));
        $manager->persist($equip);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
