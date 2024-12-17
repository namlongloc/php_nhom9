@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sửa bộ môn</h2>
    <form action="{{ route('bomon.update', $bomon->MaBM) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="TenBM">Tên bộ môn</label>
            <input type="text" name="TenBM" class="form-control" value="{{ $bomon->TenBM }}" required>
        </div>
        <button type="submit" class="btn btn-success">Cập nhật</button>
    </form>
</div>
@endsection
