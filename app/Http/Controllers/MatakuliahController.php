<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatakuliahRequest;
use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliahs = Matakuliah::leftJoin('prodi', 'matakuliah.prodi_id', '=', 'prodi.id')
            ->select('matakuliah.id','matakuliah.alias as kode_mk','matakuliah.nama_matakuliah as nama','matakuliah.sks', 'prodi.alias as prodi')->get();
        return view('matakuliah.index', compact('matakuliahs'))->with('i',0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = Prodi::select('id','kode','nama_prodi','jenjang')->get();
        return view('matakuliah.create', compact('prodis'));
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
                'prodi_id'=>'required',
                'alias'=>'required|max:5',
                'nama_matakuliah'=>'required|max:255',
                'sks'=>'nullable',
            ]);
        $alias = Matakuliah::where('alias', '=', $request->alias)->first();
        if(isset($alias)){
            return redirect()->route('matakuliahs.index')->with('failed','Matakuliah already exists!');
        }
        else {
            Matakuliah::create($request->all());
            return redirect()->route('matakuliahs.index')->with('success', 'Matakuliah created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $request->validate(
            [
                'alias'=>'required|max:5',
                'nama_matakuliah'=>'required|max:255',
                'sks'=>'nullable',
            ]
        );
        $matakuliah->update($request->all());
        return redirect()->route('matakuliahs.index')
                        ->with('success', 'Matakuliah updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliahs.index')->with('success', 'Matakuliah deleted successfully');
    }
}
