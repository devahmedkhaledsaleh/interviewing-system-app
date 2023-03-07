<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'role' => $request->role,
            'img' => $request->img,
            'team_id'=> $request->team_id 
        ]);
        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password'=> Hash::make($request->password),
            'role' => $request->role,
            'img' => $request->img,
            'team_id'=> $request->team_id 


        ]);

        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json('Post deleted successfully.');
    }
}
