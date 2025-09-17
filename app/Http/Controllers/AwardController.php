<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Awards;

class AwardController extends Controller
{
    public function index()
    {
        $awards = Awards::all();
        return view('awards', compact('awards'));
    }

    public function create()
    {
        return view('awards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required|digits:4|integer',
        ]);

        Awards::create($request->only('title', 'year'));

        return redirect()->route('awards')->with('success', 'Award added successfully!');
    }

    public function edit(Award $awards)
    {
        return view('awards.edit', compact('award'));
    }

    public function update(Request $request, Award $awards)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required|digits:4|integer',
        ]);

        $awards->update($request->only('title', 'year'));

        return redirect()->route('awards')->with('success', 'Award updated!');
    }

    public function destroy(Award $awards)
    {
        $awards->delete();
        return redirect()->route('awards')->with('success', 'Award deleted!');
    }
}
