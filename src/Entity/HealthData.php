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
     * @ORM\Column(type="uuid", unique=true)
     */
    private $healthDataUUID;

    /**
     * @ORM\Column(type="uuid")
     */
    private $patientUUID;

    /**
     * @ORM\Column(type="datetime")
     */
    private $callTimeStarts;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $callTimeEnds;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTimeCollected;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bloodPressureHigh;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bloodPressureLow;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $glucoseLevel;

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

    public function getPatientUUID()
    {
        return $this->patientUUID;
    }

    public function setPatientUUID($patientUUID): self
    {
        $this->patientUUID = $patientUUID;

        return $this;
    }

    public function getCallTimeStarts(): ?\DateTimeInterface
    {
        return $this->callTimeStarts;
    }

    public function setCallTimeStarts(\DateTimeInterface $callTimeStarts): self
    {
        $this->callTimeStarts = $callTimeStarts;

        return $this;
    }

    public function getCallTimeEnds(): ?\DateTimeInterface
    {
        return $this->callTimeEnds;
    }

    public function setCallTimeEnds(?\DateTimeInterface $callTimeEnds): self
    {
        $this->callTimeEnds = $callTimeEnds;

        return $this;
    }

    public function getDateTimeCollected(): ?\DateTimeInterface
    {
        return $this->dateTimeCollected;
    }

    public function setDateTimeCollected(\DateTimeInterface $dateTimeCollected): self
    {
        $this->dateTimeCollected = $dateTimeCollected;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getBloodPressureHigh(): ?int
    {
        return $this->bloodPressureHigh;
    }

    public function setBloodPressureHigh(?int $bloodPressureHigh): self
    {
        $this->bloodPressureHigh = $bloodPressureHigh;

        return $this;
    }

    public function getBloodPressureLow(): ?int
    {
        return $this->bloodPressureLow;
    }

    public function setBloodPressureLow(?int $bloodPressureLow): self
    {
        $this->bloodPressureLow = $bloodPressureLow;

        return $this;
    }

    public function getGlucoseLevel(): ?int
    {
        return $this->glucoseLevel;
    }

    public function setGlucoseLevel(?int $glucoseLevel): self
    {
        $this->glucoseLevel = $glucoseLevel;

        return $this;
    }
}
