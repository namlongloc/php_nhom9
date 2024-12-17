<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý chấm thi</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/tcgv.css')}}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>

    <div class="frame">
        <div class="frame1">
            <a href="{{ URL::to('/trang-chu') }}">
                <span>Trang chủ BA</span>
            </a>
            <a href="">
                <span>Cổng thông tin sinh viên</span>
            </a>
            <a href="">
                <span>Phòng đào tạo</span>
            </a>
            <a href="">
                <span>Phòng khảo thí</span>
            </a>
            <label class="dn">
                <a href="{{ URL::to('/logina') }}">
                    <span>Đăng nhập</span>
                </a>
            </label>
        </div>
        <div class="biaset">
            <img src="public/frontend/images/biaset.png"/>
        </div>
        <div class="frame2">
            <a href="{{ URL::to('/trang-chu') }}">
                <span>TRANG CHỦ</span>
            </a>
            <a href="https://ktcn.tvu.edu.vn/gioi-thieu/gioi-thieu-khoa/1.html">
                <span>GIỚI THIỆU</span>
            </a>
            <a href="">
                <span>HOẠT ĐỘNG TVU</span>
            </a>
            <a href="lichchamthind.php">
                <span>LỊCH CHẤM THI</span>
            </a>
        </div>
        <div class="frame3">
            <button class="clickleft" onclick="plusDivs(-1)">&#10094;</button>
                <img class="mySlides" src="public/frontend/images/anh1.jpg" style="width:60%; height: 300px;">
                <img class="mySlides" src="public/frontend/images/anh2.jpg" style="width:60%; height: 300px;">
                <img class="mySlides" src="public/frontend/images/anh3.jpg" style="width:60%; height: 300px;">
            <button class="clickright" onclick="plusDivs(1)">&#10095;</button>
        </div>
        @yield('gioithieu')
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n) {
            showDivs(slideIndex += n);
            }
            
            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }
            </script>
</body>
</html>
<style>
    .frame2 > :nth-child(1){
                background-color: white;
                color: #3593D8;
                height: 50px;
                font-weight: 600;
            }
</style>
