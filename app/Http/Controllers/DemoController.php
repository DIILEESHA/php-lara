<?php

namespace App\Http\Controllers;

use App\Models\DemoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DemoController extends Controller
{
    public function index()
    {
        $demoModels = DemoModel::all();
        return view('component.index', compact('demoModels'));
    }

    public function show($id)
    {
        $cloth = DemoModel::findOrFail($id);
        return view('component.single', compact('cloth'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:600',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension;
            $path = 'uploads/files';
            $file->move($path, $filename);
        } else {
            $filename = null; // If no image is provided
        }

        DemoModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename ? $path . '/' . $filename : null, // Store the relative path
        ]);

        return redirect('/')->with('status', 'created');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:600',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        $cloth = DemoModel::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($cloth->image) {
                Storage::delete($cloth->image);
            }
            // Upload new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension;
            $path = 'uploads/files';
            $file->move($path, $filename);
            $cloth->image = $path . '/' . $filename;
        }

        $cloth->name = $request->name;
        $cloth->description = $request->description;
        $cloth->save();

        return redirect('/')->with('status', 'updated');
    }

    public function destroy($id)
    {
        $cloth = DemoModel::findOrFail($id);

        // Delete the associated image from storage
        if ($cloth->image) {
            Storage::delete($cloth->image);
        }

        $cloth->delete();

        return redirect('/')->with('status', 'deleted');
    }
}
