<?php

namespace App\Http\Controllers;

use App\Models\CriteriaWeight;
use App\Models\SubCriteria;
use Illuminate\Http\Request;

class SubCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcriterias = SubCriteria::leftJoin('criteriaweights', 'subcriterias.criteria_id', '=', 'criteriaweights.id')
            ->select(
                'subcriterias.id as id',
                'subcriterias.criteria_id as cid',
                'subcriterias.poin_penilaian as pp',
                'criteriaweights.name as cname',
            )
            ->get();
        return view('subcriteria.index', compact('subcriterias'))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criteriaweight = CriteriaWeight::get();
        return view('subcriteria.create', compact('criteriaweight'));
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
            'criteria_id'=>'required',
            'poin_penilaian'=>'required|min:3|max:255'
        ]);
        SubCriteria::create($request->all());
        return redirect()->route('subcriterias.index')
            ->with('success', 'SubCriteria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCriteria  $subCriteria
     * @return \Illuminate\Http\Response
     */
    public function show(SubCriteria $subCriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCriteria  $subcriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCriteria $subcriteria)
    {
        return view('subcriteria.edit', compact('subcriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCriteria  $subcriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCriteria $subcriteria)
    {
        $request->validate([
            'criteria_id'=>'required',
            'poin_penilaian'=>'required|min:3|max:255'
        ]);
        $subcriteria->update($request->all());
        return redirect()->route('subcriterias.index')
            ->with('success','SubCriteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCriteria  $subcriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCriteria $subcriteria)
    {
        $subcriteria->delete();
        return redirect()->route('subcriterias.index')
            ->with('success','Criteria deleted successfully');
    }
}
