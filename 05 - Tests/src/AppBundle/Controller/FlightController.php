<?php
// src/AppBundle/Controller/BookController.php

namespace AppBundle\Controller;

use AppBundle\Entity\Flight;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FlightController extends Controller
{
    public function topUsersAction(Flight $flight)
    {
        $entityManager = $this->get('doctrine.orm.entity_manager');

        $flightId = $flight->getId();
        $tomorrow = new \DateTime();
        $tomorrowFormatted = $tomorrow->modify('1 day')->format('Y-m-d');
        $today = new \DateTime();
        $todayFormatted = $today->format('Y-m-d');

        // Solution 1:

//        $connection = $entityManager->getConnection();
//
//        $sql = "SELECT u.name, u.email, u.points
//                FROM `user` u
//                INNER JOIN user_flight uf ON u.id = uf.`user_id`
//                INNER JOIN flight f ON f.id = uf.`flight_id`
//                WHERE f.id = $flightId AND u.`last_seen` > " . "'" . $todayFormatted . "'" . " AND u.`last_seen` < " . "'" . $tomorrowFormatted . "'";
//
//        $statement = $connection->executeQuery($sql);
//        $result = $statement->fetchAll();
//
//        return new JsonResponse($result);

        // Solution 2:

        $qrb = $entityManager->createQueryBuilder();

        $qrb->select('u.name', 'u.email', 'u.points')
            ->from('AppBundle\Entity\User', 'u')
            ->join('u.flights', 'f')
            ->where($qrb->expr()->eq('f.id', $flightId))
            ->andWhere($qrb->expr()->gt('u.lastSeen', $qrb->expr()->literal($todayFormatted)))
            ->andWhere($qrb->expr()->lt('u.lastSeen', $qrb->expr()->literal($tomorrowFormatted)));

        $result = $qrb->getQuery()->getResult();

        return new JsonResponse($result);
    }
}

