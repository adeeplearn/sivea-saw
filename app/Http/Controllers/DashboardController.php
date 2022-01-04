<?php

namespace App\Http\Controllers;

use App\Models\CriteriaWeight;
use App\Models\Matakuliah;
use App\Models\SubCriteria;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->role === 'admin'){
            $criterias = CriteriaWeight::all();
            $subcriterias = SubCriteria::all();
            $matakuliahs = Matakuliah::all();
    
            return view('dashboard', compact('criterias', 'subcriterias', 'matakuliahs'));
        } else {
            return view('home');           
        }
    }
}
