<?php

namespace App\Http\Controllers;

use App\Models\CriteriaWeight;
use App\Models\Matakuliah;
use App\Models\SubCriteria;


class DashboardController extends Controller
{
    public function index()
    {
        $criterias = CriteriaWeight::all();
        $subcriterias = SubCriteria::all();
        $matakuliahs = Matakuliah::all();

        return view('dashboard', compact('criterias', 'subcriterias', 'matakuliahs'));
    }
}
