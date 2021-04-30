<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GlobalTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $service = factory(\Hall\Service::class,5)->create();
        $equipement = factory(\Hall\Equipement::class,15)->create();
//        $prestation = factory(\Hall\Prestation::class,5)->create();
//        $ventes = factory(\Hall\Vente::class,5)->create();


        $this->assertTrue(true);
    }
}
