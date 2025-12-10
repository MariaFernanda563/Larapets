<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PetsExport;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::orderBy('id', 'desc')->paginate(10);
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:100',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'kind'      => 'required|string|max:50',
            'weight'    => 'nullable|numeric',
            'age'       => 'nullable|integer',
            'breed'     => 'nullable|string|max:100',
            'location'  => 'nullable|string|max:200',
            'description' => 'nullable|string|max:100',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        $validated['active'] = 1;
        $validated['status'] = 0;

        Pet::create($validated);

        return redirect()->route('pets.index')->with('success', 'Pet created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'kind' => 'required|string|max:50',
            'breed' => 'nullable|string|max:100',
            'weight' => 'nullable|numeric',
            'age' => 'nullable|integer',
            'location' => 'nullable|string|max:200',
            'description' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'active' => 'nullable|boolean',
            'status' => 'nullable|string|max:50',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        }

        $validated['active'] = $request->has('active') ? 1 : 0;

        $pet->update($validated);

        return redirect()->route('pets.index')->with('success', 'Pet updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully.');
    }

    /**
     * Search for pets by name, kind, breed, or location.
     */
    public function search(Request $request)
    {
        // Accept both 'q' and 'qsearch' parameters
        $q = trim($request->input('q') ?? $request->input('qsearch', ''));

        if ($q === '') {
            $pets = Pet::orderBy('id', 'desc')->paginate(10);
            return view('pets.search', compact('pets'));
        }

        // If there's an exact name match (case-insensitive), return only that/those
        $exact = Pet::whereRaw('LOWER(name) = ?', [strtolower($q)]);
        if ($exact->exists()) {
            $pets = $exact->orderBy('id', 'desc')->paginate(10);
            return view('pets.search', compact('pets'));
        }

        // Search only by name (starting with query)
        $pets = Pet::where('name', 'like', "{$q}%")
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pets.search', compact('pets'));
    }

    //export pdf
    public function pdf(){
        $pets = Pet::all();
        $pdf = PDF:: loadView('pets.pdf', compact('pets'));
        return $pdf->download('allpets.pdf');
    }

    //Export Excel
    public function excel(){
        return Excel::download(new PetsExport, 'allpets.xlsx');
    }
}