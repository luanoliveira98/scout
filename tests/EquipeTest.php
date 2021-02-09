<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class EquipeTest extends TestCase
{
    public function testRouteIndex()
    {
        $response = $this->call('GET', '/equipes');

        $this->assertEquals(200, $response->status());
    }

    public function testIfResponseOfIndexIsSuccess()
    {
        $response = $this->call('GET', '/equipes');

        $response = json_decode($response->content());

        $expected = ($response->status == 'SUCCESS') ? true : false;

        $this->assertTrue($expected);

    }

    public function testIfResponseOfIndexIsAnArray()
    {
        $response = $this->call('GET', '/equipes');

        $response = json_decode($response->content());

        $expected = is_array($response->data);

        $this->assertTrue($expected);
    }
}
