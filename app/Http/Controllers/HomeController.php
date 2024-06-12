<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etalase;
use Illuminate\Database\Eloquent\Builder;

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
        $search_query = $request->get('search');
        if ($search_query) {
            $data = Etalase::query()
                 ->when($search_query,
                    function(Builder $builder) use ($search_query){
                        $builder->where('id_barang', 'like', "%{$search_query}%")
                        ->orWhere('nama_barang', 'like', "%{$search_query}%")
                        ->orWhere('jenis_barang', 'like', "%{$search_query}%")
                        ->orWhere('stock', 'like', "%{$search_query}%")
                        ->orWhere('satuan', 'like', "%{$search_query}%")
                        ->orWhere('harga', 'like', "%{$search_query}%");
                    }
                 )->paginate($perPage);
        }else {
            $data = Etalase::paginate($perPage);
        }
        
        return view('etalase', compact('data', 'perPage', 'showTable', 'search_query'));
    }
}
