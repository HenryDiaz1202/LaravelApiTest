<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_update()
    {
        $response = $this->put('/api/tareas/4',
        [
         'nombre' => 'Base datos',
         'descripcion' => 'Diagrama de base de datos'
        ]);
        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Editado correctamente',
            ]);
    }

    public function test_delete()
    {
        $response = $this->delete('/api/tareas/6');
        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Eliminado correctamente',
            ]);
    }

}
