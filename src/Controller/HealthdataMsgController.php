<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\MessageBus\Message\HealthdataMsg;
use App\GraphQL\Resolver\HealthDataResolver;
use Symfony\Component\HttpFoundation\Response;
use Overblog\GraphQLBundle\Definition\Argument;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\DTO\HealthdataDTO;
use Symfony\Component\Messenger\Envelope;

/**
 * Fires a healthdata message to the bus.
 */
class HealthdataMsgController extends AbstractController
{
    private $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    /**
     * This is a test. It sends the first Healthdata found to the bus
     * @Route("/sendMessage", methods={"GET"})
     */
    public function enqueueOneHealthdata(EntityManagerInterface $em): Response
    {
        $graphQl = new HealthDataResolver($em);
        $argument = new Argument(
            ['healthDataUUID', 'patientUUID']
        );
        $graphQLResult = $graphQl->findAllHealthData($argument);
        $healthDataUUID = $graphQLResult[0]->getHealthDataUUID();
        $patientUUID = $graphQLResult[0]->getPatientUUID();
        $dto = new HealthdataDTO($healthDataUUID, $patientUUID);
        $graphQLMsg = new HealthDataMsg($dto);
       // $env = new Envelope($dto, []);
        $result = $this->messageBus->dispatch($graphQLMsg);
        return new Response((string)$result->getMessage());
    }
}
