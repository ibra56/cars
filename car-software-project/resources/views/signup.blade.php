
@include('cdn')
<style>
	/* .class
{
	display: block;
	color: #00ff00;
} */
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
/* background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%; */
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 90%;
margin-top: auto;
margin-bottom: auto;
width: 80%;
/* background-color: rgba(0,0,0,0.5) !important; */
background-color:#C3E0E5;
}

/* .social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
} */
.card-header{
    height: 25%;
}
.card-header h3{
color: white;
}
form{
    /* padding: 10%; */
}

/* .social_icon{
position: absolute;
right: 20px;
top: -45px;
} */

.input-group-prepend span{
width: 50px;
background-color: #274472;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

/* .remember{
color: white;
} */

/* .remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
} */

.login_btn{
color: white;
background-color: #274472;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
color: black;
}

</style>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<!-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->
			</div>
			<div class="card-body">
				<form method="POST">
                @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="email">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Confirm Password">
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->
					<div class="form-group">
						<input type="submit" value="SignUp" class="btn float-right login_btn">
					</div>
				</form> 
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					You have an account?<a href="#">Sign In</a>
				</div>
				<!-- <div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div> -->
			</div>
		</div>
	</div>
</div>
</body>
