<?php

namespace App\Http\Controllers;

use App\Models\CriteriaWeight;
use App\Models\Matakuliah;
use App\Models\Mengajar;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliahs = Matakuliah::with(['prodi'])->get();
        // dd($matakuliahs);

        // return response()->json($matakuliahs);
        return view('alternative.index', compact('matakuliahs'));
    }

    public function show($matakuliahId)
    {
        $matakuliah_id = $matakuliahId;
        $matakuliah = Matakuliah::findOrFail($matakuliah_id);
        $criterias = CriteriaWeight::with('subcriteria')->get()->keyBy('id');
        $mengajars = Mengajar
            ::where('matakuliah_id', $matakuliah_id)
            ->with([
                'asistensi',
                'asistensi.asisten',
                'asistensi.alternative_scores',
                'asistensi.alternative_scores.rating',
                'asistensi.alternative_scores.subcriteria'
            ])
            ->get();

        $asistens = [];
        $scores = [];

        // Preprocess data from database
        foreach ($mengajars as $mengajar) {
            $asistensis = $mengajar->asistensi;

            foreach ($asistensis as $asistensi) {
                $asistens[$asistensi->asisten_id] = $asistensi->asisten;

                foreach ($asistensi->alternative_scores as $alternative_score) {
                    $scores[$asistensi->asisten_id][$alternative_score->subcriteria->criteria_id][$alternative_score->subcriteria_id][] = $alternative_score->rating->rating;
                }
            }
        }

        // Step 1
        foreach ($scores as &$asisten_scores) {
            foreach ($asisten_scores as &$criteria_scores) {
                foreach ($criteria_scores as &$subcriteria_scores) {
                    $subcriteria_scores = array_sum($subcriteria_scores) / count($subcriteria_scores);
                }
            }
        }
        $step1 = $scores;
        unset($asisten_scores, $criteria_scores, $subcriteria_scores);

        // Step 2
        foreach ($scores as &$asisten_scores) {
            foreach ($asisten_scores as &$criteria_score) {
                $criteria_score = array_sum($criteria_score);
            }
        }
        $step2 = $scores;
        unset($asisten_scores, $criteria_score);

        // Step 3
        foreach ($scores as &$asisten_scores) {
            foreach ($asisten_scores as $id => &$criteria_score) {
                $criteria = $criterias[$id];

                if ($criteria->type === 'benefit') {
                    $criteria_score /= collect($scores)->max($id);
                } else if ($criteria->type === 'cost') {
                    $criteria_score = collect($scores)->min($id) / $criteria_score;
                }
            }
        }
        $step3 = $scores;
        unset($asisten_scores, $criteria_score);

        // Step 4
        foreach ($scores as &$asisten_scores) {
            foreach ($asisten_scores as $id => &$criteria_score) {
                $criteria = $criterias[$id];
                $criteria_score *= $criteria->weight;
            }
        }
        $step4 = $scores;
        unset($asisten_scores, $criteria_score);

        // Step 5
        foreach ($scores as &$asisten_scores) {
            $asisten_scores = array_sum($asisten_scores);
        }
        arsort($scores);
        $step5 = $scores;
        unset($asisten_scores);

        return view(
            'alternative.show',
            compact('matakuliah', 'criterias', 'asistens', 'step1', 'step2', 'step3', 'step4', 'step5')
        );
    }
}
