<?php

namespace Modules\Shipment\Tests;

use Modules\Shipment\Models\Shipment;
use Tests\TestCase;

class ShipmentTest extends TestCase
{
    /** @test */
    public function it_should_create_a_shipment()
    {
        $order = new Shipment();
        $this->assertInstanceOf(Shipment::class , $order);
    }
}
