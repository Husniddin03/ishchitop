<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(Request $request)
    {
        $query = Worker::with('user', 'profession');

        if ($request->has('profession_id')) {
            $query->where('profession_id', $request->profession_id);
        }

        if ($request->has('region')) {
            $query->whereHas('user', fn($q) => $q->where('region', $request->region));
        }

        return response()->json($query->get());
    }

    public function store(Request $request)
    {
        $user = User::create($request->only(['name', 'phone', 'role', 'region', 'district']));
        $worker = Worker::create([
            'user_id' => $user->id,
            'profession_id' => $request->profession_id,
            'experience_years' => $request->experience_years,
            'hourly_rate' => $request->hourly_rate,
            'daily_rate' => $request->daily_rate,
        ]);

        return response()->json($worker, 201);
    }
}
