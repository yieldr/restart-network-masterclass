<?php

namespace AppBundle;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestFlights extends WebTestCase
{
    public function testGetFlights()
    {
        $client = static::createClient();
        $client->request('GET', '/flights', [], [], ['HTTP_ACCEPT' => 'application/json']);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $content = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals(0, $content[0]['number']);
        $this->assertGreaterThan(1, $content[0]['seats']);
        $this->assertEquals('AMS', $content[0]['origin']);
        $this->assertEquals('BAR', $content[0]['destination']);
        $this->assertNull($content[0]['departureTime']);
        $this->assertEquals(91, $content[0]['seatsAvailable']);
        $this->assertEquals(10, $content[0]['value']);
    }

    public function testGetFlightsYesterday()
    {
        $client = static::createClient();
        $client->request('GET', '/flights/1/topusers', [], [], ['HTTP_ACCEPT' => 'application/json']);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $content = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals('UserName 0', $content[0]['name']);
        $this->assertContains('@', $content[0]['email']);
        $this->assertEquals('whatever0@gmail.com', $content[0]['email']);
        $this->assertEquals(0, $content[0]['points']);
    }

    public function testPutFlights()
    {
        $client = static::createClient();

        $body = <<<JSON
            {
                "number": 1,
                "seats": 1,
                "origin": "BAR",
                "destination": "AMS",
                "scheduledDepartureTime": "2018-02-19T09:42:21+00:00",
                "departureTime": "2018-02-19T09:42:21+00:00",
                "seatsAvailable": 1,
                "value": 1,
                "users": []
            }
JSON;

        $client->request('PUT', '/flights/100', [], [], ['HTTP_ACCEPT' => 'application/json', 'CONTENT_TYPE' => 'application/json'], $body);

        $content = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals(1, $content['number']);
        $this->assertEquals(1, $content['seats']);
        $this->assertEquals('BAR', $content['origin']);
        $this->assertEquals('AMS', $content['destination']);
        $this->assertEquals('2018-02-19T09:42:21+00:00', $content['scheduledDepartureTime']);
        $this->assertEquals('2018-02-19T09:42:21+00:00', $content['departureTime']);
        $this->assertEquals(1, $content['seatsAvailable']);
        $this->assertEquals(1, $content['value']);
        $this->assertEmpty($content['users']);

    }
}