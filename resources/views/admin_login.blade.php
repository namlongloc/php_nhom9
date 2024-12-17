<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý</title>
    <link rel="stylesheet" href="{{ asset('public/backend/css/dangnhap.css') }}">
</head>

<body>
    <div class="title">
        <img src="public/backend/images/TVU-SET.png" />
        <h1>QUẢN LÝ CÔNG TÁC CHẤM THI </h1>
        <h3>KHOA KỸ THUẬT & CÔNG NGHỆ</h3>
    </div>
    <div class="container">
        
        <form action="{{URL::to ('/admin-chaomung') }}" name="dangnhap" method="post">
            {{ csrf_field() }}
            <h2>Đăng nhập</h2>
            <div class="dangnhap">
                <span>Tài khoản</span>
                <input type="text" name="tendn" required=""/>
            </div>
            <div class="dangnhap">
                <span>Mật khẩu</span>
                <input type="password" name="matkhau" required=""/> 
            </div>
            <!-- <div class="check">
                <input type="checkbox" />
                <span>Nhớ lần đăng nhập này</span>
            </div> -->
            <br>
            <button name="dn" type="submit">Đăng nhập</button>
            
        </form>
        <?php
                $message = Session::get('message');
                if($message){
                    echo $message;
                    Session::put('message',null);
                };
            ?>
    </div>
    </div>
</body>

</html>