<?php

namespace App\Http\Controllers;

use App\Imports\DosenImport;
use App\Imports\MengajarImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use function ucfirst;

class ImportContoller extends Controller
{
    public function index()
    {
        return view('import.index');
    }

    public function mengajar(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new MengajarImport(), $file->getRealPath(), null, ucfirst($file->getClientOriginalExtension()));

        return redirect()->route('import.index');
    }

    public function dosen(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new DosenImport(), $file->getRealPath(), null, ucfirst($file->getClientOriginalExtension()));

        return redirect()->route('import.index');
    }
}
