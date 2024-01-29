<?php

namespace Modules\Product\Tests;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Product\Models\Product;
use Tests\TestCase;
class ProductTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function it_should_create_a_product()
    {
        $product  = Product::factory()->create();
//        $this->assertInstanceOf(Product::class , $product);
//        $this->assertDatabaseHas('products',$product);
//        dd($product);

        $this->assertNotEmpty($product->name);
    }
}
