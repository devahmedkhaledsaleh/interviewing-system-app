<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidatesController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return response()->json($candidates);
    }

    public function store(Request $request)
    {
        $candidate = Candidate::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv' => $request->cv,
            'img' => $request->img,
            'proposed_position' => $request->proposed_position,
            'state' => $request->state,
            'comment' => $request->comment,
            'recruiter' => $request->recruiter,
            'team_id' => $request->team_id,
            'current_employer' => $request->current_employer,
            'linkedin_profile' => $request->linkedin_profile,
        ]);
        return response()->json($candidate);
    }

    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return response()->json($candidate);
    }

    public function update(Request $request, $id)
    {

        $candidate = Candidate::findOrFail($id);
        $candidate = Candidate::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv' => $request->cv,
            'img' => $request->img,
            'proposed_position' => $request->proposed_position,
            'state' => $request->state,
            'comment' => $request->comment,
            'recruiter' => $request->recruiter,
            'team_id' => $request->team_id,
            'current_employer' => $request->current_employer,
            'linkedin_profile' => $request->linkedin_profile,


        ]);

        return response()->json($candidate);
    }

    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();
        return response()->json('Post deleted successfully.');
    }
}
