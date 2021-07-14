<?php

namespace App\Entity;

use App\Repository\HealthDataRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * @ORM\Entity(repositoryClass=HealthDataRepository::class)
 */
class HealthData
{
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid")
     */
    private $healthDataUUID;

    public function __construct()
    {
        $this->healthDataUUID = Uuid::v4();
    }

    public function getHealthDataUUID()
    {
        return $this->healthDataUUID;
    }

    public function setHealthDataUUID($healthDataUUID): self
    {
        $this->healthDataUUID = $healthDataUUID;
        return $this;
    }
}
