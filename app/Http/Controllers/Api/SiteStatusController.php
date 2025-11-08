<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteStatusController extends Controller
{
    public function show(Request $request)
    {
        $apiKey = $request->header('X-Api-Key');
        $site = Site::where('api_key', $apiKey)->first();

        if (!$site) {
            return response()->json(['error' => 'Invalid API key'], 401);
        }

        return response()->json([
            'status' => $site->status,
            'message' => $site->message,
        ]);
    }
}
