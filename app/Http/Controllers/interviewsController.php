<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;

class interviewsController extends Controller
{
    public function index()
    {
        $interviews = Interview::all();
        return response()->json($interviews);
    }

    public function store(Request $request)
    {
        $interview = Interview::create([
            'type' => $request->type,
            'score' => $request->score,
            'result' => $request->result,
            'notes' => $request->notes
        ]);
        return response()->json($interview);
    }

    public function show($id)
    {
        $interview = Interview::findOrFail($id);
        return response()->json($interview);
    }

    public function update(Request $request, $id)
    {

        $interview = Interview::findOrFail($id);
        $interview = Interview::where('id', $id)->update([
            'type' => $request->type,
            'score' => $request->score,
            'result' => $request->result,
            'notes' => $request->notes


        ]);

        return response()->json($interview);
    }

    public function destroy($id)
    {
        $interview = Interview::findOrFail($id);
        $interview->delete();
        return response()->json('Post deleted successfully.');
    }
}
