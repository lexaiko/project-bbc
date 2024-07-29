<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barangsByCategory($categoryId, Request $request)
    {
        $skip = $request->get('skip', 0);
        $barangs = Barang::where('category_id', $categoryId)
                        ->skip($skip)
                        ->take(10)
                        ->get();

        return response()->json($barangs);
    }

    public function loadMore(Request $request)
    {
        $skip = $request->get('skip', 0);
        $kategori = $request->get('kategori', 'all');

        if ($kategori === 'all') {
            $barangs = Barang::skip($skip)->take(10)->get();
        } else {
            $barangs = Barang::where('category_id', $kategori)->skip($skip)->take(10)->get();
        }

        return response()->json($barangs);
    }
    public function show($id)
    {
        // Temukan barang berdasarkan ID
        $barang = Barang::findOrFail($id);

        // Kembalikan tampilan dengan data barang
        return view('barangs.show', compact('barang'));
    }
}
