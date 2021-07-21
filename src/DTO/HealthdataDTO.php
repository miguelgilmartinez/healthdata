<?php

namespace App\DTO;

/**
 * This is a DTO object to transfer Healthdata
 */
class HealthdataDTO
{
    private string $healthDataUUID;

    private string $patientUUID;

    public function __construct($healthDataUUID, $patientUUID)
    {
        $this->healthDataUUID = $healthDataUUID;
        $this->patientUUID = $patientUUID;
    }

    public function getHealthDataUUID(): string
    {
        return $this->healthDataUUID;
    }

    public function getPatientUUID(): string
    {
        return $this->patientUUID;
    }

    public function __toString()
    {
        return serialize($this);
    }
}
