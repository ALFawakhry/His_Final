<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">"

    <!-- <link rel="stylesheet" href="css/shalaby.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/ahmed.css">
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="css/shalaby.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index2.css">


</head>
<style>
    .s1 {
        color: #299adc;
    }

    ul li:nth-child(1) {
        border: 1px solid #eee;
        border: none;
    }
    a[href="signup"]
{
    margin-left: 200px;
    text-decoration: underline;
    color: #299adc;;
}
.hos
{
    margin-left: 100px;
    border-radius: 12%;
}
.display
{
    display: none;
}

</style>

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
                <li><a href="contact">CONTACT</a></li>
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
    <!--start slider-->
     <div id="home">
        <div class="slider">
            <div class="container">
                <div class="intro">
                    <h1>The Most Valuable <br>Thing is Your Health </h1>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                        <br> and Consonantia, there live the blind texts. Separated they live in
                        <br>Bookmarksgrove.
                    </p>
                </div>
                <div class="book">
                   <a @if (session('loggedIn'))
                   class="display"
               @endif>
               <button class="b11" onclick="window.location.href='signup'"> REGISTER NOW </button></a>
               <button class="b11" onclick="window.location.href='options'"> Medical Record </button></a>
                    <!--
                    <select>

                        <option disabled selected>Select Department</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="X-Ray">X-Ray</option>
                        <option value="Dental">Dental</option>
                        <option value="Ophthalmology">Ophthalmology</option>
                        <option value="Otheservices">Otheservices</option>

                    </select>
                     -->
                    <button class="b11" onclick="window.location.href='appointment'"> BOOK APPOINTMENT </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Of  Shalaby-->

    <div class="s_container">
        <div class="all_sec">
            <div class="row">
                <h2 id="Login">Welcome to <span>Tele_Health</span></h2>
                <br>
                <div class="ser">
                    <div class="icon">
                        <a href="#"><i class="fas fa-ambulance fa-3x"></i></a>
                    </div>
                    <div>
                        <h3>Emergency Help</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                        </p>
                    </div>
                </div>
                <div class="ser">
                    <div class="icon">
                        <a href="#"><i class="fas fa-user-md fa-3x"></i></a>
                    </div>
                    <div>
                        <h3>Qualified Doctors</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>

                </div>
                <div class="ser">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-syringe fa-3x"></i></a>
                    </div>
                    <div>
                        <h3>Location & Directions</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia
                        </p>
                    </div>
                </div>
                <div class="ser">
                    <div class="icon">
                        <a href="#"><i class="fas fa-hand-holding-medical fa-3x"></i></a>
                    </div>
                    <div>
                        <h3>Medical Treatment</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <img src="img/hospital.jpg" width="400px" height="400px" class="hos">
            </div>
            <!--
            <div class="form">
                <form>
                     <h2>Appointment Form</h2>

                    <h2>Login</h2>

                    <br>

                    <input type="text" placeholder="Email" required>
                    <br>

                    <br>
                    <input type="text" placeholder="Phone" required>

                    <br>
                    <input type="password" placeholder="Password" required>

-->
                    <!-- <br>
                    <select name="servic" class="select">
                        <option value="">Select Your Services</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Dental">Dental</option>
                        <option value="Ophthalmolog">Ophthalmolog</option>
                        <option value=" Other Services "> Other Services</option>
                    </select>

                    <br>

                    <input type="date" class="time" placeholder="Date">

                    <br>
                    <input type="time" placeholder="Time">

                    <br>
                    <textarea name="message" class="textarea" cols="30" rows="3" placeholder="Message"></textarea> -->

                    <br>
                    <!-- <button class="btn">Appointment</button> -->
                    <!--
                    <button class="btn" onclick="window.location.href='appointment'">submit</button>
                    <br>
                    <a href="signup">Sign Up</a>


                </form>
            </div>
        -->
        </div>
    </div>

    <!-- End Section Of  Shalaby-->
    <!-- ******************************************************************* -->
    <!-- A_Taha Section -->


    <!-- End Of The *********Qualified Doctor******************** -->
    <!-- ******************************************************** -->
    <!------------------------------------------->


    <!---------------------------------------------------------->


    <section class="dep1" id="departments">
        <div class="container">
            <div class="header">
                <h2>Tele-Health <span>Departments</span></h2>
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
                            <h3 style="margin-left: 26px">X-Ray</h3>
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
    <footer>
        <div class="foot">
             <p> &COPY; 2019 - <span>TAHA</span>,all right reversed</p>
        </div>
    </footer>

</body>

</html>
