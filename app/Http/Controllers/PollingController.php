<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollingController extends Controller
{
    public function index(){
        $mengajars = DB::table('mengajar')
            ->leftJoin('dosen', 'dosen.id', '=', 'mengajar.dosen_id')
            ->leftJoin('matakuliah', 'matakuliah.id', '=', 'mengajar.matakuliah_id')
            ->get();

        return view('polling.index', compact('mengajars'));
    }

    public function listasisten(){
        return view('polling.list');
    }

    public function isi(){
        return view('polling.isi');
    }
}
