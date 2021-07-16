<?php

namespace App\DataFixtures;

use App\Entity\HealthData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Uid\Uuid;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $healthdata = new HealthData();
        // Add a few health data
        $healthdata->setHealthDataUUID(Uuid::v4());
        $healthdata->setBloodPressureLow(80);
        $healthdata->setBloodPressureHigh(299);
        $healthdata->setPatientUUID(Uuid::v4());
        $manager->persist($healthdata);
        $manager->flush();
    }
}
