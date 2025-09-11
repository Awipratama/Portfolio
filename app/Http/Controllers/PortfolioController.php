<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Awards;

class PortfolioController extends Controller
{
    // Array buat loopingan Award
    public function index()
    {
        $awards = Awards::latest()->get();
        $projects = $this->projects();

        return view('portfolio', compact('awards', 'projects'));
    }

    public function projects()
    {
        return Project::latest()->get();
    }
}
