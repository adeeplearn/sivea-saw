<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $has_kritik = Kritik::where('dosen_id', Auth::user()->dosen_id)->exists();
        return view('kritik.isi', compact('has_kritik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kritik = $request->validate([
            'pesan' => 'required|min:3|max:255',
        ]);

        $kritik['dosen_id'] = Auth::user()->dosen_id;

        Kritik::create($kritik);

        return redirect()->route('kritik.index');
    }
    
}
