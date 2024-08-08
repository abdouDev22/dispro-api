<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_car()
    {
        $response = $this->postJson('/api/cars', [
            'matricule' => 'ABC123',
            'nombre_de_chevaux' => 150,
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                     'matricule' => 'ABC123',
                     'nombre_de_chevaux' => 150,
                 ]);
    }

    /** @test */
    public function it_can_list_all_cars()
    {
        $response = $this->getJson('/api/cars');

        $response->assertStatus(200);
    }

    // Ajoute d'autres tests pour les opérations CRUD
}
