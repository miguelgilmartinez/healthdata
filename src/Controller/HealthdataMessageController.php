<?php

namespace App\Controller;

use App\GraphQL\Resolver\HealthDataResolver;
use Doctrine\ORM\EntityManagerInterface;
use Overblog\GraphQLBundle\Definition\Argument;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Envelope as MessengerEnvelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Messenger;
use App\Message\NewHealthdata;

/**
 * @deprecated
 */
class HealthdataMessageController extends AbstractController
{
    private $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    /**
     * This is a test. It sends all 
     * @Route("/sendMessage", methods={"GET"})
     */
    public function enqueueAllHealthdata(EntityManagerInterface $em): Response
    {
        $graphQl = new HealthDataResolver($em);
        $argument = new Argument(
            ['healthDataUUID', 'patientUUID']
        );
        $data = $graphQl->findAllHealthData($argument);
        
        // $argument2 = new Argument( ['healthDataUUID' => 'de4789ff-c25b-4f5c-bfa8-37be90f223aa']);
        // $data = $graphQl->findOneHealthData(
        // );
        // dd($data);
        $message = new NewHealthData("this is a testing message");
        // dd(($message));
        // $envelope = new MessengerEnvelope("eeee");
        $this->messageBus->dispatch($message);
        return new Response('Message sent!');
    }
}
