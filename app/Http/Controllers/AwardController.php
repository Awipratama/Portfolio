<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    // Array buat loopingan Award
    public function index()
    {
        $award = [
            [
                'title' => 'Best Developer',
                'year' => 2022,
            ],
            [
                'title' => 'Employee of the Month',
                'year' => 2021,
            ],
            [
                'title' => 'Innovation Award',
                'year' => 2020,
            ]
        ];

        return view('portfolio', compact('award'));
    }
}
