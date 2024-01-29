<?php

namespace Modules\Order\Tests;

use Modules\Order\Models\Order;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /** @test */
    public function it_should_create_an_order()
    {
        $order = new Order();
        $this->assertInstanceOf(Order::class , $order);
    }
}
