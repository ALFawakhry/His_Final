<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <title>Login</title>
    <style>
        .form
        {
            height: 400px;
        }
        .icon_head
        {
            margin-left: 140px;
        }
        .links
        {
            width:40%;
        }
        .form a
        {
            color:#299adc;
            margin-left: 34px;
        }
        input, .btn
        {
            margin-top: 30px
        }
        .text-danger
        {
            color: red;
            padding: 5px;
        }
    </style>
</head>
<body>
    <!--start header-->
    <div class="navbar">
        <div class="container">
            <div class="icon_head">
                <div class="icon1">
                    <i class="fa fa-hospital-o fa-3x"></i>
                </div>
                <div class="par">
                    <p>Tele-Health </p>
                </div>
            </div>
            <ul class="links">
                <li><a href="index"> HOME </a></li>
                <li><a href="index2">DEPARTMENTS</a></li>
                <li><a href="contact"> CONTACT</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br><br><br>
    <!--end header-->
    <div class="form">
        <form action="login" method="post">
            @csrf
            <h2>Login</h2>
            <br>
            <input type="text" placeholder="Email" name="email" value="{{old('email')}}">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
            <br>
            <input type="password" placeholder="Enter Password" name="password">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
            <p style="color:red;padding:10px;text-align:center">{{session('message')}}</p>
            <button type="submit" class="btn">Login</button>
            <br>
            <a class="sign-Up" href="../signup">I do not have an account, Create new</a>
        </form>
    </div>
</body>
</html>
