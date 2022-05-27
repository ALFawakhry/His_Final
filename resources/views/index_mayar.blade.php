<!DOCTYPE html>
<html>
    <head>
        <title>Neurology</title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <style>
            .s1
            {
                color: #299adc;
            }
            .content .b1 li:nth-child(1)
            {
                border: 1px solid #eee;
                border-right: none;
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
        <section class="departments">
            <div class="container">
                <div class="header">
                    <h2>Medex <span>Department</span></h2>
                </div>
                <div class="content">
                    <div class="b1">
                        <ul>
                            <li>
                                <a href="index_mayar" class="link">
                                    <span><i class="fa-solid fa-kit-medical"></i></span>
                                    <span class="s1">Neurology</span>
                                </a>
                            </li>
                            <li>
                                <a href="index3" class="link">
                                    <span><i class="fa-solid fa-kit-medical"></i></span>
                                    <span>Ophthalmology</span>
                                </a>
                            </li>
                            <li>
                                <a href="index4" class="link">
                                    <i class="fa-solid fa-kit-medical"></i>
                                    <span>X-Ray</span>
                                </a>
                            </li>
                            <li>
                                <a href="index5" class="link">
                                    <i class="fa-solid fa-kit-medical"></i>
                                    <span>Surgical</span>
                                </a>
                            </li>
                            <li>
                                <a href="index6" class="link">
                                    <i class="fa-solid fa-kit-medical"></i>
                                    <span>Cardiology</span>
                                </a>
                            </li>
                            <li>
                                <a href="index7" class="link">
                                    <i class="fa-solid fa-kit-medical"></i>
                                    <span>Dental Clinic</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="service1" id="service-1">
                        <div class="image">
                            <img src="img/img3.JPG">
                        </div>
                        <div class="content2">
                            <h3>Neurology</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                            <div class="content3">
                                <i class="fa-solid fa-check"></i>
                                <span>The Big Oxmox advised her not to do so</span>
                            </div>
                            <div class="content3">
                                <i class="fa-solid fa-check"></i>
                                <span>Far far away, behind the word mountains</span>
                            </div>
                            <div class="content3">
                                <i class="fa-solid fa-check"></i>
                                <span>Separated they live in Bookmarksgrove</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </body>
</html>
