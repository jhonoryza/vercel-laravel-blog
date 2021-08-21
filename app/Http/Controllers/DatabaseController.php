<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DatabaseController extends Controller
{
    public function migrate()
    {
        Artisan::call('migrate');
        return response()->json([
            'message' => 'migrate success'
        ]);
    }
}
