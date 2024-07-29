<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
  public function index()
  {
    $materials = Material::all();
    return view('materials.index', compact('materials'));
  }

  public function create()
  {
    return view('materials.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255|unique:materials',
      'opening_balance' => 'required|numeric|min:0',
    ]);

    Material::create($request->all());

    return redirect()->route('materials.index')->with('success', 'Material created successfully.');
  }

  public function show($id)
  {
    $material = Material::with('inwardOutwards')->find($id);
    return view('materials.show', compact('material'));
  }

  public function edit($id)
  {
    $material = Material::findOrFail($id);
    return view('materials.edit', compact('material'));
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'name' => 'required|string|max:255|unique:materials,name,' . $id,
      'opening_balance' => 'required|numeric|min:0',
    ]);

    $material = Material::findOrFail($id);
    $material->update($request->all());

    return redirect()->route('materials.index')->with('success', 'Material updated successfully.');
  }

  public function destroy($id)
  {
    $material = Material::findOrFail($id);
    $material->delete();

    return redirect()->route('materials.index')->with('success', 'Material deleted successfully.');
  }

  public function manage()
  {
    $materials = Material::withCount('inwardOutwards as current_balance')
      ->select('id', 'name', 'opening_balance')
      ->get();

    return view('materials.manage', compact('materials'));
  }
}
