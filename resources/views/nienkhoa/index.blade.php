@extends('layouts.app')

@section('content')
<div class="h2text">
    <h2>
        <ion-icon name="bookmark"></ion-icon>
        Quản lý niên khóa
    </h2>
    </div>
    
        <div class="btn">
            <button>
            <a href="{{ route('nienkhoa.create') }}">
                <ion-icon name="add-circle"></ion-icon>
                <span>Thêm niên khóa</span>
            </a>
        </div>

        <div class="quanly">
            <table class="table">
            <tr>
                <th>Mã niên khóa</th>
                <th>Tên niên khóa</th>
                <th>Thời gian bắt đầu</th>
                <th>Thời gian kết thúc</th>
                <th>Tùy chọn</th>
            </tr>
            @foreach($nienkhoa as $nk)
            <tr>
                <td>{{ $nk->MaNK }}</td>
                <td>{{ $nk->TenNK }}</td>
                <td>{{ date('d/m/Y', strtotime($nk->TGbatdau)) }}</td>
                <td>{{ date('d/m/Y', strtotime($nk->TGketthuc)) }}</td>
                <td>
                    <a href="{{ route('nienkhoa.edit', $nk->MaNK) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('nienkhoa.destroy', $nk->MaNK) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
        </div>
    <style>
        .admin_tab > :nth-child(9){
            background-color: #3593D8;
            color: white;
        }
    </style>
@endsection
