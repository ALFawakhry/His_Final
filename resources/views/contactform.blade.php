<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact us</title>
		<link rel="stylesheet" href="css/style.css">
        <link href="css/style2.css" rel="stylesheet" type="text/css"  media="all" />
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
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
        </style>
    </head>
	<body>
		<!--start-wrap-->

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
                    </ul>
                </div>
            </div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">
				<div class="col span_1_of_3">

      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>India</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>tele-health@gmail.com</span></p>

				   </div>
				</div>
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2><hr><br>
					  <form action="{{ route('send.email') }}" method="POST">
						@csrf
						@if (Session::has('error'))
						    <div class="alert alert-danger">
								{{Session::get('error')}}
							</div>
						@endif
						
						@if (Session::has('success'))
						    <div class="alert alert-success">
								{{Session::get('success')}}
							</div>
						@endif
						<div>
							<span><label>Name</label></span>
							<span><input type="text" name="name" value=""></span>
							@error('name')
								<span style="color:red;">{{ $message }}</span>
							 @enderror
						</div>
						<div>
							<span><label>E-Mail</label></span>
							<span><input type="text" name="email" value=""></span>
							@error('email')
							<span style="color:red;">{{ $message }}</span>
						 @enderror
						</div>
						<div>
							 <span><label>subject</label></span>
							<span><input type="text" name="subject" value=""></span>
							@error('subject')
							<span style="color:red;">{{ $message }}</span>
						 @enderror
						</div>
						<div>
							<span><label>phone</label></span>
						   <span><input type="text" name="phone" value=""></span>
						   @error('phone')
						   <span style="color:red;">{{ $message }}</span>
						@enderror
					   </div>
						<div>
							<span><label>message</label></span>
							<span><textarea name="message"> </textarea></span>
							@error('message')
							<span style="color:red;">{{ $message }}</span>
						 @enderror
						</div>
					   <div>
							   <span><input type="submit"  value="Submit"></span>
					  </div>
					</form>
				    </div>
  				</div>
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>

	</body>
</html>
