<?php

namespace App\Http\Controllers;

use App\Models\Bomon;
use Illuminate\Http\Request;

class BomonController extends Controller
{
    public function index()
    {
        $bomon = Bomon::all(); // Lấy toàn bộ bộ môn
        return view('bomon.index', compact('bomon'));
    }

    public function create()
    {
        return view('bomon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'TenBM' => 'required|string|max:255',
        ]);

        Bomon::create([
            'TenBM' => $request->TenBM,
        ]);

        return redirect()->route('bomon.index')->with('success', 'Thêm bộ môn thành công.');
    }

    public function edit($id)
    {
        $bomon = Bomon::findOrFail($id);
        return view('bomon.edit', compact('bomon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TenBM' => 'required|string|max:255',
        ]);

        $bomon = Bomon::findOrFail($id);
        $bomon->update([
            'TenBM' => $request->TenBM,
        ]);

        return redirect()->route('bomon.index')->with('success', 'Cập nhật thành công.');
    }

    public function destroy($id)
    {
        $bomon = Bomon::findOrFail($id);
        $bomon->delete();

        return redirect()->route('bomon.index')->with('success', 'Xóa bộ môn thành công.');
    }
}
