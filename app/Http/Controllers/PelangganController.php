<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    //
    public function index()
    {
        $users = DB::table('pelanggan')->get();

        return response()->json($users); // Atau langsung: return $users;
    }
}
