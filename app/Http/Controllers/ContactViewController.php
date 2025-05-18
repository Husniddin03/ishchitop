<?php

namespace App\Http\Controllers;

use App\Models\ContactView;
use Illuminate\Http\Request;

class ContactViewController extends Controller
{
    public function store(Request $request)
    {
        $view = ContactView::create([
            'viewer_id' => $request->viewer_id,
            'worker_id' => $request->worker_id,
            'viewed_at' => now()
        ]);

        return response()->json($view, 201);
    }
}
