<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Camera;

class CameraTest extends TestCase
{
    use RefreshDatabase;

    public function testFilterCamerasByState()
    {
        Camera::factory()->create(['state' => 'habilitada']);
        Camera::factory()->create(['state' => 'desabilitada']);

        $response = $this->get('/api/cameras?state=habilitada');

        $response->assertStatus(200);
        $response->assertJsonCount(1);
    }
}
