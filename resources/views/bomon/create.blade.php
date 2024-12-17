@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm bộ môn</h2>
    <form action="{{ route('bomon.store') }}" method="POST">
        @csrf
        <div class="text">
            <h2>
            <ion-icon name="add-circle"></ion-icon>
            THÊM BỘ MÔN
            </h2>
        </div>
    
        <div class="thembm">
            <!-- <div class="them">
                <span>Mã bộ môn</span>
                <input type="text" readonly name="MaBM"/>
            </div> -->
    
            <div class="them">
                <span>Tên bộ môn</span>
                <input type="text" name="TenBM"/>
            </div>
    
            <div class="luubm">
            <input type="submit" name="them" value="Thêm"/>
            </div>
        </div>
    </form>
        
    <style>
                .admin_tab >:nth-child(1){
                    background-color: #3593D8;
                    color: white;
                }
                </style>
</div>


@endsection
