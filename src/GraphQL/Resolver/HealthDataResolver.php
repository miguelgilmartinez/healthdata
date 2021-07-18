<?php

/**
 * Maps GraphQL petitions to Symfony
 *
 * @author miguelgilmartinez@gmail.com
 */

namespace App\GraphQL\Resolver;

use App\Entity\HealthData;
use Doctrine\ORM\EntityManagerInterface;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class HealthDataResolver implements ResolverInterface, AliasedInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function findAllHealthData(Argument $args)
    {
        $values = $this->em->getRepository(HealthData::class)->findAll();
        return $values;
    }

    public function findByID(Argument $args)
    {
        return $this->em->getRepository(HealthData::class)
            ->findOneById($args['userUUID']);
    }

    public static function getAliases(): array
    {
        return [
            'findAllHealthData' => 'all_healthdata',
            'findByID' => 'user_by_id'
        ];
    }
}
