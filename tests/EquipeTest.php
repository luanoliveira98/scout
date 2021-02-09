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

    public function testIfResponseOfIndexIsAnArray()
    {
        $response = $this->call('GET', '/equipes');

        $response = json_decode($response->content());

        $expected = is_array($response->data);

        $this->assertTrue($expected);
    }
}
