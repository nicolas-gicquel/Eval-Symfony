<?php
// tests/Controller/ProductsControllerTest.php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testNewProducts()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testIndexProducts()
    {
        $client = static::createClient();

        $client->request('GET', '/products/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}