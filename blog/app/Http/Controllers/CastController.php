<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = DB::table('casts')->select('id', 'name', 'age')->get();
        return view('cast.view', ['casts' => $casts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'bio' => 'required',
        ]);

        DB::table('casts')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio')
        ]);

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        if (!$cast) {
            return redirect('/cast')->with('error', 'Cast member not found.');
        }
        // dd($cast);
        return view('cast.show', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        if (!$cast) {
            return redirect('/cast')->with('error', 'Cast member not found.');
        }
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'bio' => 'required',
        ]);

        $affected = DB::table('casts')
                      ->where('id', $id)
                      ->update([
                          'name' => $request->input('name'),
                          'age' => $request->input('age'),
                          'bio' => $request->input('bio'),
                      ]);

        if ($affected) {
            return redirect('/cast')->with('success', 'Cast member updated successfully.');
        } else {
            return back()->with('error', 'Failed to update cast member.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('casts')->where('id', $id)->delete();

        if ($deleted) {
            return redirect('/cast')->with('success', 'Cast member deleted successfully.');
        } else {
            return back()->with('error', 'Failed to delete cast member.');
        }
    }
}
