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

    public function testIfResponseOfIndex()
    {
        $response = $this->call('GET', '/equipes');

        $expected = is_object($response->content());

        $this->assertTrue($expected);
    }
}
