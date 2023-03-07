<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechnicalTopics;

class TechnicalTopicsController extends Controller
{
    public function index()
    {
        $technicalTopics = TechnicalTopics::all();
        return response()->json($technicalTopics);
    }

    public function store(Request $request)
    {
        $technicalTopic = TechnicalTopics::create([
            'name' => $request->name,
            'team_id' => $request->team_id,
        ]);
        return response()->json($technicalTopic);
    }

    public function show($id)
    {
        $technicalTopic = TechnicalTopics::findOrFail($id);
        return response()->json($technicalTopic);
    }

    public function update(Request $request, $id)
    {

        $technicalTopic = TechnicalTopics::findOrFail($id);
        $technicalTopic = TechnicalTopics::where('id', $id)->update([
            'name' => $request->name,


        ]);

        return response()->json($technicalTopic);
    }

    public function destroy($id)
    {
        $technicalTopic = TechnicalTopics::findOrFail($id);
        $technicalTopic->delete();
        return response()->json('Post deleted successfully.');
    }
}
