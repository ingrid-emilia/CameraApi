<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Alert;

class AlertTest extends TestCase
{
    use RefreshDatabase;

    public function testFilterAlertsByClientAndTimeRange()
    {
        $clientA = 'Cliente A';
        $clientB = 'Cliente B';

        Alert::factory()->create(['client' => $clientA, 'timestamp' => '2023-07-19 12:00:00']);
        Alert::factory()->create(['client' => $clientB, 'timestamp' => '2023-07-19 14:30:00']);
        Alert::factory()->create(['client' => $clientA, 'timestamp' => '2023-07-19 16:45:00']);

        // filtra cllientes
        $response = $this->get('/api/alerts?client=' . urlencode($clientA));
        $response->assertStatus(200);
        $response->assertJsonCount(2);

        // Filtra intervalo de tempo 
        $response = $this->get('/api/alerts?startDate=2023-07-19&endDate=2023-07-19');
        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }
}
