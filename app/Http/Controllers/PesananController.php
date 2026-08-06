<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index(Request $request)
    {
        // Beritahu Laravel bahwa primary key-nya adalah 'id_pesanan'
        DB::table('pesanan')->insertGetId([
            'id_pelanggan'    => $request->input('id_pelanggan'),
            'tanggal_pesanan' => now(),
            'total_harga'     => $request->input('total_harga')
        ], 'id_pesanan'); // <-- Parameter kedua menetapkan sequence column / primary key

        return response()->json([
            'message' => 'data received',
        ]);
    }
}
