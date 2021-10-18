<?php

namespace Tests\Unit;

use App\Http\Controllers\OrderController;
use App\Http\Requests\OrderImportRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Maatwebsite\Excel\Facades\Excel;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_welcome_page()
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertViewIs('welcome');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_orders_index_page()
    {
        $response = $this->get(route('orders.index'));

        $response->assertOk()
            ->assertViewIs('orders.index');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_import_orders()
    {
        $response = $this->post(route('orders.import'), [
            'file' => null
        ]);

        $response->assertStatus(302);
    }
}
