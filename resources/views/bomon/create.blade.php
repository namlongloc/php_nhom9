@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm bộ môn</h2>
    <form action="{{ route('bomon.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="TenBM">Tên bộ môn</label>
            <input type="text" name="TenBM" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection
