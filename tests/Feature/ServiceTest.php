<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Service;

class ServiceTest extends TestCase
{
//    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testExample()
//    {
//        $this->assertTrue(true);
//    }
    public function testDataBase(){
        $service = factory(\App\Service::class,5)->create();
        $this->assertTrue(true);
    }
}
