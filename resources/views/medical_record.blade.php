<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        .patients {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:70%;
    margin-left:210px ;
  }

  .patients td, .patients th {
    border: 1px solid #ddd;
    padding:10px;
    text-align: center;
  }

  .patients tr:nth-child(even){background-color: #f2f2f2;}

  .patients tr:hover {background-color: #ddd;}

  .patients th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align:center;
    background-color: #04AA6D;
    color: white;
  }
  .space{
    height:460px;
}
.head{
    margin-left:600px;
    color: #878f89;
    font-family: cursive;
    text-shadow: 2px 2px 5px rgb(216, 167, 167);
}
    </style>
</head>

<body>
     <!--start header-->
     <div class="navbar">
        <div class="container">
            <div class="icon_head">
                <div class="icon1">
                    <i class="fa fa-hospital-o fa-3x" style="margin-left:140px "></i>
                </div>
                <div class="par">
                    <p>Tele-Health </p>
                </div>
            </div>
            <ul class="links">
                <li><a href="index"> HOME </a></li>
                <li><a href="index">DEPARTMENTS</a></li>
                <li><a href="contact">CONTACT</a></li>
                <li><a href="logout">LOG OUT</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br><br><br>
    <!--end header-->
    <h1 class="head">All medical record</h1>

<table class="patients">
  <tr>
    <th>Date</th>
    <th>BPR</th>
    <th>BSR</th>
    <th>Blood Type</th>
    <th>Patient MRN</th>
    <th>Patient Other</th>
  </tr>
  @foreach($medical_rec as $medical_reco)
  <tr >
    <td>{{$medical_reco->datetime}}</td>
    <td>{{$medical_reco->BPR}}</td>
    <td>{{$medical_reco->BSR}}</td>
    <td>{{$medical_reco->blood_type}}</td>
    <td>{{$medical_reco->MRN}}</td>
    <td>{{$medical_reco->Other}}</td>


  </tr>
  @endforeach

</table>

    <div class="space">

    </div>
    <footer>
        <div class="foot">
             <p> &COPY; 2019 - <span>TAHA</span>,all right reversed</p>
        </div>
    </footer>
</body>
</html>
