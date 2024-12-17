<?php

namespace App\Http\Controllers;

use App\Models\NienKhoa;
use Illuminate\Http\Request;

class NienKhoaController extends Controller
{
    // Hiển thị danh sách niên khóa
    public function index()
    {
        $nienkhoa = NienKhoa::orderBy('TGbatdau', 'asc')->get();
        return view('nienkhoa.index', compact('nienkhoa'));
    }

    // Hiển thị form thêm mới
    public function create()
    {
        return view('nienkhoa.create');
    }

    // Lưu thông tin niên khóa mới
    public function store(Request $request)
{
    // Lấy thời gian hiện tại
    $now = now()->format('Y-m-d');

    // Thực hiện validate dữ liệu
    $request->validate([
        'TenNK' => 'required|string',
        'TGbatdau' => 'required|date|after:' . $now, // Thời gian bắt đầu phải lớn hơn hiện tại
        'TGketthuc' => 'required|date|after:TGbatdau', // Thời gian kết thúc phải sau TGbatdau
    ], [
        'TGbatdau.after' => 'Thời gian bắt đầu phải lớn hơn thời gian hiện tại.',
        'TGketthuc.after' => 'Thời gian kết thúc phải lớn hơn thời gian bắt đầu.',
    ]);

    // Lưu dữ liệu vào cơ sở dữ liệu
    NienKhoa::create($request->all());

    return redirect()->route('nienkhoa.index')->with('success', 'Thêm niên khóa thành công!');
}

    // Hiển thị form chỉnh sửa
    public function edit($id)
    {
        $nienkhoa = NienKhoa::findOrFail($id);
        return view('nienkhoa.edit', compact('nienkhoa'));
    }

    // Cập nhật thông tin
    public function update(Request $request, $id)
    {
        // Lấy thời gian hiện tại
        $now = now()->format('Y-m-d');
    
        // Thực hiện validate dữ liệu
        $request->validate([
            'TenNK' => 'required|string',
            'TGbatdau' => 'required|date|after:' . $now, // Thời gian bắt đầu phải lớn hơn hiện tại
            'TGketthuc' => 'required|date|after:TGbatdau', // Thời gian kết thúc phải sau TGbatdau
        ], [
            'TGbatdau.after' => 'Thời gian bắt đầu phải lớn hơn thời gian hiện tại.',
            'TGketthuc.after' => 'Thời gian kết thúc phải lớn hơn thời gian bắt đầu.',
        ]);
    
        // Cập nhật dữ liệu trong cơ sở dữ liệu
        $nienkhoa = NienKhoa::findOrFail($id);
        $nienkhoa->update($request->all());
    
        return redirect()->route('nienkhoa.index')->with('success', 'Cập nhật niên khóa thành công!');
    }
    // Xóa niên khóa
    public function destroy($id)
    {
        $nienkhoa = NienKhoa::findOrFail($id);
        $nienkhoa->delete();

        return redirect()->route('nienkhoa.index')->with('success', 'Xóa thành công!');
    }
}

