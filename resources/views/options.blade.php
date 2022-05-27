<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/options.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
                <li><a href="login" @if (session('loggedIn'))
                    class="display"
                @endif>LOGIN</a></li>
                <li><a href="logout" @if (!session('loggedIn'))
                    class="display"
                @endif style="margin-left: -46px">LOGOUT</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br><br><br>
    <!--end header-->
    <div class="welcome">
        <h1 class="h11">Welcome <span class="un">{{ session('userName')}}</span></h1>
        <button class="button-53" role="button" style="margin-top: 100px" onclick="window.location.href='appointment'">Make An Appointment</button>
        <button class="button-53" role="button" onclick="window.location.href='mrn'">Show Medical Record</button>
    </div>
</body>
</html>
