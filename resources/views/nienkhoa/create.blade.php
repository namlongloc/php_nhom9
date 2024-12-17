@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('nienkhoa.store') }}" method="POST">
        @csrf
        <div class="text">
            <h2>
                <ion-icon name="add-circle"></ion-icon>
                THÊM NIÊN KHÓA
            </h2>
        </div>
    
        <div class="thembm">
            <div class="them">
                <span>Mã niên khóa</span>
                <input type="text" name="MaNK" readonly/>
            </div>
    
            <div class="them">
                <span>Tên niên khóa</span>
                <input type="text" name="TenNK" value="{{ old('TenNK') }}" required class="@error('TenNK') is-invalid @enderror"/>
                @error('TenNK')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="them">
                <span>Thời gian bắt đầu</span>
                <input type="date" name="TGbatdau" value="{{ old('TGbatdau') }}" required class="@error('TGbatdau') is-invalid @enderror"/>
                @error('TGbatdau')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="them">
                <span>Thời gian kết thúc</span>
                <input type="date" name="TGketthuc" value="{{ old('TGketthuc') }}" required class="@error('TGketthuc') is-invalid @enderror"/>
                @error('TGketthuc')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="luubm">
                <input type="submit" name="luu" value="Lưu"/>
            </div>
        </div>
    </form>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
<style>
    .admin_tab >:nth-child(9){
        background-color: #3593D8;
        color: white;
    }
    .alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 15px;
}
/* CSS tùy chỉnh cho các thông báo lỗi */
.is-invalid {
    border-color: red;
}

.invalid-feedback {
    color: red;
    font-size: 0.875em;
}
    </style>
</div>

@endsection
