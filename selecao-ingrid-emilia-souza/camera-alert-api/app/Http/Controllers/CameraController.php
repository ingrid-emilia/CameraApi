<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Camera;

class CameraController extends Controller
{
    public function index(Request $request)
    {
        $state = $request->input('state', 'habilitada');
        $cameras = Camera::where('state', $state)->get();
        return response()->json($cameras);
    }
}


