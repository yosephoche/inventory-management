<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etalase;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function etalase(Request $request)
    {
        $perPage = $request->get('per_page', 20); // Default items per page
        $showTable = $request->get('show_table', false);
        $data = Etalase::paginate($perPage);

        return view('etalase', compact('data', 'perPage', 'showTable'));
    }
}
