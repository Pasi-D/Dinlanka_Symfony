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
        array('/about'),
        array('/contact'),
        array('/dinlanka-cargo-insurance'),
        array('/air-freight'),
        array('/ior-eor-services'),
        array('/new-shipping-containers-for-sale'),
        array('/ocean-freight'),
        array('/sea-air-service'),
        array('/service'),
        array('/supply-chain-manegment'),
        array('/freezer-transportation-solutions'),
        array('/entrepot-trade')

    );
}
}