<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alert;

class AlertController extends Controller
{
    public function index(Request $request)
    {
        $client = $request->input('client');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate', date('Y-m-d'));

        $query = Alert::query();

        if ($client) {
            $query->where('client', $client);
        }

        if ($startDate && $endDate) {
            $query->whereBetween('timestamp', [$startDate, $endDate . ' 23:59:59']);
        } elseif ($startDate) {
            $query->where('timestamp', '>=', $startDate);
        } else {
            // Retorna as ocorrências do dia
            $query->whereDate('timestamp', date('Y-m-d'));
        }

        $alerts = $query->get();

        return response()->json($alerts);
        }
        
}