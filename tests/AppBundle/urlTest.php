<?php

// tests/AppBundle/ApplicationAvailabilityFunctionalTest.php
namespace Tests\AppBundle;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApplicationAvailabilityFunctionalTest extends WebTestCase
{
/**
* @dataProvider urlProvider
*/
public function testPageIsSuccessful($url)
{
    $client = self::createClient();
    $client->request('GET', $url);

    $this->assertTrue($client->getResponse()->isSuccessful());
}

public function urlProvider()
{
    return array(
        array('/'),
        array('/dinlanka'),
        array('/dinlanka/about'),
        array('/dinlanka/contact'),
        array('/dinlanka/dinlanka-cargo-insurance'),
        array('/dinlanka/air-freight'),
        array('/dinlanka/ior-eor-services'),
        array('/dinlanka/new-shipping-containers-for-sale'),
        array('/dinlanka/ocean-freight'),
        array('/dinlanka/sea-air-service'),
        array('/dinlanka/service'),
        array('/dinlanka/supply-chain-manegment')

    );
}
}