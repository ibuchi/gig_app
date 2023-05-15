<?php

namespace App\Http\Controllers;

use App\Models\Gigs;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $gigs = Gigs::all();

        return view('dashboard', compact('gigs'));
    }
}
