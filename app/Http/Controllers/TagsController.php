<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function store(Request $request)
    {
        $tag = Tag::create([
            'name' => $request->name,
        ]);
        return response()->json($tag);
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return response()->json($tag);
    }

    public function update(Request $request, $id)
    {

        $tag = Tag::findOrFail($id);
        $tag = Tag::where('id', $id)->update([
            'name' => $request->name,


        ]);

        return response()->json($tag);
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return response()->json('Post deleted successfully.');
    }
}
