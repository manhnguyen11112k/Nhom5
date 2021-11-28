<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <link rel="shortcut icon" href="image/avt.ico" />
    <style type="text/css">
        body{
        }
        .dangnhap {
            margin-top: 30px;
        }
        #chu-chay{
            width: 1024px;
            margin-left: 150px;
            color: red;
            font-size: 20px;
            font-weight: bold;
            background: white;
            margin-top: -3.4px;
            text-align: center;
        }
        #main{
            width: 1024px;
            height: 500px;
        }
        #main form{
            margin-left: 380px;
            margin-top: 200px;
        }
    </style>
</head>
<body>
    <div id="chu-chay">
        <marquee>Đăng nhập tài khoản người dùng!</marquee>
    </div>
    <div id="main">
        <form action='dangnhap.php' class="dangnhap" method='POST'> 
            <table width="300px" border="1px" solid #ccc align="center">
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='text' name='username' /> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu : 
                    </td>
                    <td>
                        <input type='password' name='password'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type='submit' class="button" name="dangnhap"  value='Đăng nhập' /> 
                    </td>
                    <td>
                        <button>
                            <a href='dangky.php' title='Đăng ký'>Đăng ký</a> 
                        </button>
                    </td>
                </tr>
               <?php require '../../../Controllers/client/xuly_dangnhap.php';?> 
            </table>
        <form> 
    </div>
</body>
</html>