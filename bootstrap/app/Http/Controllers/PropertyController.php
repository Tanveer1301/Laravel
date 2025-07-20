<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Post::all();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'flat_id' => 'required|unique:posts',
            'tenant_name' => 'required',
            'tenant_phone' => 'required',
            'rent' => 'required|numeric',
        ]);

        Post::create($request->all());

        return redirect()->route('properties.index')->with('success', 'Property added successfully!');
    }

    public function destroy($flat_id)
    {
        Post::where('flat_id', $flat_id)->delete();
        return redirect()->route('properties.index')->with('success', 'Property deleted!');
    }

    #new
    public function edit($flat_id)
{
    $property = Post::findOrFail($flat_id);
    return view('properties.edit', compact('property'));
}

public function update(Request $request, $flat_id)
{
    $request->validate([
        'tenant_name' => 'required',
        'tenant_phone' => 'required|max:11',
        'rent' => 'required|numeric',
        'other_charges' => 'nullable|numeric',
        'description' => 'nullable|string',
    ]);

    $property = Post::where('flat_id', $flat_id)->firstOrFail();
    $property->update($request->all());

    return redirect()->route('properties.index')->with('success', 'Property updated successfully!');
}

}


