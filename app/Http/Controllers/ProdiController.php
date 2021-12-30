<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodis = Prodi::get();
        return view('prodi.index', compact('prodis'))->with('i',0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|numeric|max:100',
            'nama_prodi' => 'required|max:255',
            'jenjang' => 'required | max:2',
            'alias' => 'required|max:255',
        ]);
        $prodi = Prodi::where('kode', '=', $request->kode)->first();
        if (isset($prodi)){
            return redirect()->route('prodis.index')->with('failed', 'Prodi already exists!');
        }else{
            Prodi::create($request->all());
            return redirect()->route('prodis.index')
                ->with('success','Prodi created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        return view('prodi.edit',compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'kode' => 'required|numeric|max:100',
            'nama_prodi' => 'required|max:255',
            'jenjang' => 'required | max:2',
            'alias' => 'required|max:255',
        ]);

        $prodi->update($request->all());

        return redirect()->route('prodis.index')
            ->with('success','Prodi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodis.index')->with('success', 'Data prodi '.$prodi->nama_prodi.' berhasil dihapus');
    }
}
