<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return response()->json($teams);
    }

    public function store(Request $request)
    {
        $team = Team::create([
            'name' => $request->name,
        ]);
        return response()->json($team);
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return response()->json($team);
    }

    public function update(Request $request, $id)
    {

        $team = Team::findOrFail($id);
        $team = Team::where('id', $id)->update([
            'name' => $request->name,


        ]);

        return response()->json($team);
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return response()->json('Post deleted successfully.');
    }
}
