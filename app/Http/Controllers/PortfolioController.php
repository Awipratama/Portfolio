<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
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

        $projects = $this->projects();

        return view('portfolio', compact('award', 'projects'));
    }

    public function projects()
    {
        return Project::latest()->get();
    }
}
