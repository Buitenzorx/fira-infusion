<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;

class WeightController extends Controller
{
    public function store(Request $request)
    {
        $weight = new Weight();
        $weight->weight1 = $request->input('weight1');
        $weight->weight2 = $request->input('weight2');
        $weight->percent_weight1 = $request->input('percent_weight1');
        $weight->percent_weight2 = $request->input('percent_weight2');
        $weight->save();

        return response()->json(['success' => true]);
    }
    public function index()
    {
        $weights = Weight::all(); // Contoh: Mengambil semua data dari model Weight

        return response()->json($weights); // Mengembalikan data dalam bentuk JSON
    }
}

