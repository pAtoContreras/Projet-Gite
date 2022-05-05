<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Proprietaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ProprioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // for ($i = 1; $i <= 250; $i++) {
        //     // Utilise factory pour créer une instance de Faker\Generator
        //     $faker = Factory::create('fr_FR');

        //     $proprio = new Proprietaire();
        //     $proprio->setHorairesDisponibilites((rand(8,13)).' H - '.(rand(14,19)).' H');
        //     $proprio->setMailProprietaire($faker->email());
        //     $proprio->setNomProprietaire($faker->name());
        //     $proprio->setTelProprietaire($faker->phoneNumber());

        //     $manager->persist($proprio);
        // }

        // $manager->flush();
    }
}
