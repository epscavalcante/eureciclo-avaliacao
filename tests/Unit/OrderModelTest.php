<?php

namespace Tests\Unit;

use App\Models\Order;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class OrderModelTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_fillable_are_correct()
    {
        $fillableExpected = [
            'comprador',
            'descricao',
            'preco_unitario',
            'quantidade',
            'endereco',
            'fornecedor'
        ];

        $this->assertEquals((new Order)->getFillable(), $fillableExpected);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_order()
    {
        $order = Order::factory()->make();

        $this->assertTrue($order->save());
    }
}
