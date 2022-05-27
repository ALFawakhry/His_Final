<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .form {
            margin-top: 30px;
            height: 640px;
        }

        .icon_head {
            margin-left: 140px;
        }

        .links {
            width: 40%;
        }

    </style>
</head>

<body>
    <!--start header-->
    <div class="navbar" style="margin: 0">
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
                {{-- <li><a href="mrn">Medical Record</a></li> --}}
                <li><a href="logout"> Log Out</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br><br><br>
    <!--end header-->
    <div class="form" style="height:550px">
        <form action="/appointment" method="POST">
            @csrf
            <!-- <h2>Appointment Form</h2>
             -->
            <h2>Make An Appointment</h2>

            <br>
            {{-- @if (session()->has('massage'))
                <div class="alert alert-success" style="color: rgb(32, 164, 5) ; text-align:center">
                    {{ session()->get('massage') }}
                </div>
            @endif --}}
            <input type="text" placeholder="Email" name="email" value="{{session('email')}}" placeholder="{{session('email')}}">
            <br>
            @error('email')
                <p style="color: red ; text-align:center ;padding-top:3px">{{ $message }}</p>
            @enderror
            <input type="text" placeholder="Phone" name="phone">
            <br>
            @error('phone')
                <p style="color: red ; text-align:center ;">{{ $message }}</p>
            @enderror
            <select name="doc_spec" class="select-dep">
                <option value="">Doctor Specialization</option>
                <option value="Neurology">Neurology</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Dental">Dental</option>
                <option value="Ophthalmolog">Ophthalmolog</option>
                <option value=" Other Services "> Other Services</option>
            </select>
            @error('doc_spec')
                <p style="color: red ; text-align:center ;">{{ $message }}</p>
            @enderror
            <input type="fees" class="fees" placeholder="" name="fees" value="100" readonly>

            <input type="datetime-local" class="date" placeholder="Date" name="date">
            @error('date')
                <p style="color: red ; text-align:center ;">{{ $message }}</p>
            @enderror

            <input class="btn" type="submit" value="Submit">
            <br>
            <a href="logout" class="signout" style="text-decoration: none">Sign Out</a>
            @if (session()->has('massage'))
                <div class="alert alert-success" style="color: rgb(0, 149, 37) ; text-align:center">
                    {{ session()->get('massage') }}
                </div>
            @endif
             @if (session()->has('error'))
            <div class="alert alert-success" style="color: rgb(225, 16, 16) ; text-align:center">
                {{ session()->get('error') }}
            </div>
            @endif
            {{--@if (session()->has('error2'))
            <div class="alert alert-success" style="color: rgb(225, 16, 16) ; text-align:center">
                {{ session()->get('error2') }}
            </div>--}}
        </form>
    </div>
</body>

</html>
