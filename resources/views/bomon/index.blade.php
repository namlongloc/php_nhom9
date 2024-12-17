@extends('layouts.app')
@section('content')
<div class="h2text">
    <h2>
        <ion-icon name="bookmark"></ion-icon>
        QUẢN LÝ BỘ MÔN
    </h2>
    </div>
    
        <div class="btn">
            <button>
            <a href="{{ route('bomon.create') }}">
                <ion-icon name="add-circle"></ion-icon>
                <span>Thêm bộ môn</span>
            </a>
        </div>
    <div class="quanly">
        <table class="table">
            <tr>
                
                <th>Mã bộ môn</th>
                <th>Tên bộ môn</th>
                <th>Tùy chọn</th>
            </tr>
            <tr>
            @foreach ($bomon as $bm)
                <tr>
                    <td>{{ $bm->MaBM }}</td>
                    <td>{{ $bm->TenBM }}</td>
                    <td>
                        <a href="{{ route('bomon.edit', $bm->MaBM) }}" class="btn btn-warning">
                            <ion-icon name="pencil"></ion-icon> Sửa
                        </a>
                        
                        <!-- Nút Xóa -->
                        <form action="{{ route('bomon.destroy', $bm->MaBM) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <ion-icon name="trash"></ion-icon> Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
    <style>
        .admin_tab > :nth-child(1){
            background-color: #3593D8;
            color: white;
        }
    </style>
</div>
@endsection
