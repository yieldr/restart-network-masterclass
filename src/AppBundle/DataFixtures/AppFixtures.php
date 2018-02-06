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

        // We create the ancillaries
        for ($i = 0; $i < 20; $i++) {
            $now = new \DateTime();

            $ancillary = new Ancillary();
            $ancillary->setType('Extra Space');
            $ancillary->setDate($now);
            $ancillary->setPointsGiven(5);
            $ancillary->setPointsNeeded(15);
            $ancillary->setValue(1);

            $manager->persist($ancillary);
        }

        // We create the flights
        for ($i = 0; $i < 100; $i++) {

            $flight = new Flight();
            $flight->setNumber($i);
            $flight->setSeats(100+$i);
            $flight->setSeatsAvailable($i);
            $flight->setOrigin('AMS');
            $flight->setDestination('BAR');
            $flight->setScheduledDepartureTime($now);
            $flight->setValue(10);

            $manager->persist($flight);
        }

        // We create the users with some bookings
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->setName('UserName '.$i);
            $user->setEmail('whatever'.$i.'@gmail.com');
            $user->setLocation('Amsterdam');
            $booking = new Booking();
            $booking->setFlight($flight);
            $booking->setUsers($user);
            $user->setBookings([$booking]);
            $user->setAncillaries([$ancillary]);

            $manager->persist($booking);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
