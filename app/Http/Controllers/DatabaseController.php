<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class DatabaseController extends Controller
{
    public function test()
    {
        $user = User::first();
        return response()->json([
            'user_id' => $user->id ?? '-',
            'message' => 'connection ok'
        ]);
    }
    
    public function migrate()
    {
        Artisan::call('migrate');
        return response()->json([
            'message' => 'migrate success'
        ]);
    }
}
