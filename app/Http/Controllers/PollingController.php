<?php

namespace App\Http\Controllers;

use App\Models\AlternativeScore;
use App\Models\Asistensi;
use App\Models\Mengajar;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PollingController extends Controller
{
    public function index()
    {
        $dosen = Auth::user();
        $matakuliahs = [];
        $mengajars = Mengajar
            ::where('dosen_id', $dosen->dosen_id)
            ->with(['matakuliah'])
            ->doesntHave('asistensi.alternative_scores')
            ->get();

        return view('polling.index', compact('mengajars'));
    }

    public function listasisten($mengajarId)
    {
        $mengajar = Mengajar::findOrFail($mengajarId);
        $matakuliah = $mengajar->matakuliah;
        $asistensis = $mengajar->asistensi()->with(['asisten', 'alternative_scores'])->get();
        $done_all = true;

        foreach ($asistensis as $asistensi) {
            if ($asistensi->alternative_scores->isEmpty()) {
                $done_all = false;

                break;
            }
        }

        return view('polling.list', compact('matakuliah', 'asistensis', 'done_all'));
    }

    public function isi($asistensiId)
    {
        $asistensi = Asistensi::findOrFail($asistensiId);
        $subcriterias = SubCriteria::with(['criteria', 'criteria.criteriarating'])->get();
        $matakuliah = $asistensi->mengajar->matakuliah;
        $asisten = $asistensi->asisten;
        return view('polling.isi', compact('asistensi', 'asisten', 'matakuliah', 'subcriterias'));
    }

    public function store(Request $request, $asistensiId)
    {
        $asistensi = Asistensi::findOrFail($asistensiId);

        $data = $request->validate([
            'pesan' => 'required',
            'score' => 'required|array',
        ]);

        // Save the score
        $scores = [];
        foreach ($data['score'] as $subcriteria_id => $rating_id) {
            $scores[] = [
                'asistensi_id' => $asistensiId,
                'subcriteria_id' => $subcriteria_id,
                'rating_id' => $rating_id,
                'pesan' => $data['pesan'],
            ];
        }

        AlternativeScore::insert($scores);

        return redirect()->route('polling.asisten', ['mengajarId' => $asistensi->mengajar_id])
            ->with('success', 'Berhasil memberikan polling asisten.');
    }
}
