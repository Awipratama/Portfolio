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
                'title' => '2nd Champion Web Design',
                'year' => 2023,
            ],
            [
                'title' => '3rd Champion Contest of Wits',
                'year' => 2024,
            ],
            [
                'title' => 'Skensa Scout Members',
                'year' => 2024,
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
