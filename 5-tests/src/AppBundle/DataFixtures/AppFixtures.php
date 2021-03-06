<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Ancillary;
use AppBundle\Entity\Booking;
use AppBundle\Entity\Flight;
use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $now = new \DateTime();


        // We create the users
        $users = [];
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->setName('UserName '.$i);
            $user->setEmail('whatever'.$i.'@gmail.com');
            $user->setLocation('Amsterdam');
            $user->setPoints($i);
            $user->setLastSeen((new \DateTime())->modify("-".($i%10)."day"));

            $users[] = $user;
            $manager->persist($user);
        }
        // We create the flights bought by some users
        $flights = [];
        for ($i = 0; $i < 100; $i++) {

            $flight = new Flight();
            $flight->setNumber($i);
            $flight->setSeats(($i%3 +1) * 100);
            $flight->setSeatsAvailable($flight->getSeats() - (($i%3 +1) * 9));
            $flight->setOrigin('AMS');
            $flight->setDestination('BAR');
            $flight->setScheduledDepartureTime((new \DateTime())->modify("+".($i%5)."day"));
            $flight->setValue(10);
            $users[$i]->setFlights([$flight]);
            $flight->setUsers([$users[$i]]);

            $flights[] = $flight;

            $manager->persist($flight);
        }

        $ancillaryTypes = [
            'Food & Beverage',
            'Extra Leg Room',
            'Car Rental',
            'Hotel',
            'Insurance',
            'Check-in Baggage'
        ];

        // We create the ancillaries
        foreach ($users as $i => $user) {
            $now = new \DateTime();

            $ancillary = new Ancillary();
            $ancillary->setType($ancillaryTypes[$i % count($ancillaryTypes)]);
            $ancillary->setDate($now);
            $ancillary->setPointsGiven(5);
            $ancillary->setPointsNeeded(15);
            $ancillary->setValue($i+1);
            $ancillary->setUser($user);

            $manager->persist($ancillary);
        }

        $manager->flush();
    }
}
