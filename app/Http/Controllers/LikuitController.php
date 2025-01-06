<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikuitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $active = $request->query('active', 'dashboard_v1');
        return view('dashboard.likuit-create', ['active' => $active]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required',
        //     'category' => 'required|string|max:255',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('img'), $imageName);

        // $product = Product::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'category' => $request->category,
        //     'image' => 'img/'.$imageName,
        // ]);

        // return redirect()
        //     ->route('likuit.index')
        //     ->with('message', 'New data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
