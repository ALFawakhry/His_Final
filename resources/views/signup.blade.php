
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
        .form
        {
            height: 500px;
        }
        .icon_head
        {
            margin-left: 140px;
        }
        .links
        {
            width:40%;
        }
        .sign-in
        {
            margin-left: 48px;
            color: #299adc;
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
        @if(session('erorr'))<p class="erorr"> {{ session('erorr')}}</p> @endif
          <form method="post" action="signup">
              @csrf
              <!-- <h2>Appointment Form</h2>
               -->
              <h2>Sign Up</h2>

              <br>
              <input type="text" placeholder="Name"  name="fullName"  id="name" required  value="{{old('name')}}">
              @error('fullName') <p class='error'> {{$message}}</p> @enderror


              <br>
              <input type="text" placeholder="Email" name="email"  id="email" required value="{{old('email')}}" >
              @error('email') <p class='error'> {{$message}}</p> @enderror
              <br>
              <input type="text" placeholder="Address" name="address"  id="Address" required>
              <select name="gender" class="select-dep" value="Select gender">
                <option>Male</option>
                <option>Femal</option>
            </select>
              <input type="password" placeholder="Password" name="password"  id="password" required>
              @error('password') <p class='error'> {{$message}}</p> @enderror
              <input type="password" placeholder="Password confirmation" name="password_confirmation"  id="password_conformation" required>



              <br>
              <button class="btn" onclick="window.location.href='options'">Sign-up</button>
              <br>


              <a href="index" class="sign-in">Sign In</a>
          </form>
      </div>
</body>
</html>
