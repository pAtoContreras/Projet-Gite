<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use APP\Entity\Gite;
use App\Entity\Proprietaire;
use Faker\Factory;

class GiteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         for($i = 1; $i <= 250; $i++){
            // Utilise factory pour créer une instance de Faker\Generator
            $faker = Factory::create('fr_FR');

            // Table PROPRIETAIRE
            $proprio = new Proprietaire();
            $proprio->setHorairesDisponibilites((rand(8,13)).' H - '.(rand(14,19)).' H');
            $proprio->setMailProprietaire($faker->email());
            $proprio->setNomProprietaire($faker->name());
            $proprio->setTelProprietaire($faker->phoneNumber());

            $manager->persist($proprio);

            // Table GITE
             $gite = new Gite();
             $gite->setAdresse($faker->address);
             $gite->setCodePostal($faker->postcode);
             $gite->setDepartement($faker->departmentName);
             $nbchambres = $faker->numberBetween(1, 5);
             $gite->setNbChambres($nbchambres);
             $gite->setNbCouchage($nbchambres * $faker->numberBetween(1, 2));
             $gite->setPrixAnimaux($faker->numberBetween(11, 34));
             $gite->setRegion($faker->region);
             $gite->setSurface($faker->numberBetween(9, 150));
             $gite->setTarifJourBS($faker->numberBetween(30, 250));
             $gite->setTarifJourHS($faker->numberBetween(45, 350));
             $gite->setVille($faker->city);
             $gite->setIdProprietaire($proprio);
            
             $manager->persist($gite);
     }
     $manager->flush();
}
}