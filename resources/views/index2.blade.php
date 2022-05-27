<!DOCTYPE html>
<html>
    <head>
        <title>HIS</title>
        <link rel="stylesheet" href="css/index2.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            .one .content
            {
                padding-left: 0;
            }
            .header h2
            {
                padding-top: 50px;
            }
        </style>
    </head>
    <body>
        <!--start-header-->
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
			<!--end-header-->
        <section class="dep1">
            <div class="container">
                <div class="header">
                    <h2>Medex <span>Department</span></h2>
                </div>
                <div class="flex">
                    <div class="one">
                        <div class="image">
                            <img src="img/img3.JPG">
                        </div>
                        <div class="content">
                            <a href="index_mayar" class="link">
                                <h3>Neurology</h3>
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="one">
                        <div class="image">
                            <img src="img/img2.JPG">
                        </div>
                        <div class="content">
                            <a href="index3" class="link">
                                <h3>Ophthalmology</h3>
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="one">
                        <div class="image">
                            <img src="img/img5.JPG">
                        </div>
                        <div class="content">
                            <a href="index4" class="link">
                                <h3>X-Ray</h3>
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="one">
                        <div class="image">
                            <img src="img/img6.JPG">
                        </div>
                        <div class="content">
                            <a href="index5" class="link">
                                <h3>Surgical</h3>
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="one">
                        <div class="image">
                            <img src="img/img1.JPG">
                        </div>
                        <div class="content">
                            <a href="index6" class="link">
                                <h3>Cardiology</h3>
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="one">
                        <div class="image">
                            <img src="img/img7.JPG">
                        </div>
                        <div class="content">
                            <a href="index7" class="link">
                                <h3>Dental Clinic</h3>
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
