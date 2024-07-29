<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InwardOutward;
use App\Models\Category;
use App\Models\Material;

class InwardOutwardController extends Controller
{
  public function create()
  {
    $categories = Category::all();
    $materials = Material::all();
    return view('inward-outward.create', compact('categories', 'materials'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'material_category' => 'required|exists:categories,id',
      'material_id' => 'required|exists:materials,id',
      'date' => 'required|date',
      'quantity' => 'required|numeric',
    ]);

    InwardOutward::create($request->all());

    return redirect()->route('inward-outward.create')->with('success', 'Quantity added successfully.');
  }
}
