<?php
namespace Tests\Feature;
use Tests\TestCase;

class AddTest extends TestCase
{
    public function test_store()
    {
        $response = $this->post('/api/tareas',
        [
         'nombre' => 'Inteligencia artificial',
         'descripcion' => 'Diseñar chatbot'
        ]);
        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Guardado correctamente',
            ]);
    }
}
