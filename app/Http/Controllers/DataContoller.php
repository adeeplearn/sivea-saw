<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataContoller extends Controller
{
    public function index()
    {
        return view('data.index');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new DataImport(), $file->getRealPath(), null, \ucfirst($file->getClientOriginalExtension()));

        return redirect()->route('data.index');
    }
}
