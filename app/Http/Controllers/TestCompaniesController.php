<?php

namespace App\Http\Controllers;

use App\Models\TestCompanies;
use App\Models\User;
use App\Models\Events;
use Illuminate\Http\Request;

class TestCompaniesController extends Controller
{

    public function getCompanies(Request $request)
    {
        $token = $request->user()->currentAccessToken();

        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $companies = TestCompanies::all();

        return response()->json($companies);
    }

    public function viewCompanies()
{
    // $token = $request->user()->currentAccessToken();
    $companies = TestCompanies::all();

    return view('viewcompanies', compact('companies'));
}

    public function viewEvents()
    {
        // $events = Events::all();

        // return response()->json($events);

        $events = DB::table('events')->get();

        return view('events', compact('events'));
    }

}
