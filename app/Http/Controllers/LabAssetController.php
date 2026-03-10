<?php

namespace App\Http\Controllers;

use App\Models\LabAsset;
use Illuminate\Http\Request;

class LabAssetController extends Controller
{
    public function index()
    {
        return response()->json(LabAsset::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required',
            'category' => 'required',
            'serial_number' => 'required|unique:lab_assets',
            'stock' => 'required|integer',
            'condition' => 'required'
        ]);
        return response()->json(LabAsset::create($validated), 201);
    }

    public function show($id)
    {
        $asset = LabAsset::find($id);
        return $asset ? response()->json($asset) : response()->json(['message' => 'Gak ketemu!'], 404);
    }

    public function update(Request $request, $id)
    {
        $asset = LabAsset::findOrFail($id);
        $asset->update($request->all());
        return response()->json(['message' => 'Berhasil diupdate!', 'data' => $asset]);
    }

    public function destroy($id)
    {
        LabAsset::destroy($id);
        return response()->json(['message' => 'Barang dihapus!']);
    }
}