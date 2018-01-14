<!DOCTYPE html>
<html>
<head>
    <title>
    NEWS_ADDA
    </title>
    <script src="includefiles/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="includefiles/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="includefiles/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container col-md-offset-3 col-md-6">
        <div id="login_tabs">
            <ul class="nav nav-tabs nav-justified">
                <li class="active" id="b_login"><a data-toggle="tab" href="#">Log In</a></li>
                <li><a data-toggle="tab" href="#">Sign Up</a></li>
            </ul>
        </div>
        <div id ="f_login_box">
        <h1>Login</h1>
            <form class="form-horizontal" action=" <?=$_SERVER[ 'PHP_SELF'];?>" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="u_name">Username</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="u_name" name="user_name"></br>
                    </div>
                </div>
                <div class="form-group">
                    <label class=" control-label col-sm-2" for=p _wd ">Password </label>
				<div class="col-sm-10 ">
				<input class = "form-control " type = "password " id ="p_wd " name="password "></br>
				</div>
		</div>
		<div class = "form-group ">
				<div class= "col-sm-offset-2 col-sm-10 ">
<button type = "submit " class = "btn btn-default " name="submit ">Login</button>
				</div>
		</div>
</form>
    </div>

            <div id = "f_signup_box ">
            <h1>SignUp</h1>
<form class="form-horizontal " action = " <?=$_SERVER[ 'PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="u_name">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="u_name" name="user_name"></br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 " for="e_mail">E-mail</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="e_mail" name="email"></br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" control-label col-sm-2" for=p _wd ">Password </label>
				<div class="col-sm-10 ">
				<input class = "form-control " type = "password " id ="p_wd " name="password "></br>
				</div>
		</div>
		<div class = "form-group ">
				<div class= "col-sm-offset-2 col-sm-10 ">
<button type = "submit " class = "btn btn-default " name="submit ">Signup</button>
				</div>
		</div>
</form>
</div>
</div>
<script type="text/javascript ">

 // $("#login_tabs").children(':first-child').click(function(){
 //     $("#login_tabs").parent().next().hide();
 // });
console.log(document.body.serializeWithStyles());
// var x = $("#login_tabs").children('#login_tabs:1st-child');
// x.click(function(){
//      $("#login_tabs").next().hide();
//  });
// $(".nav-tabs").click(function(){

// var x=$(this).attr('id');
// if(x=='b_signup')
// {
// $("#login_box").slideUp();
// $("#b_login").addClass("active");
// $("#b_signup").removeClass("active");
// $("#signup_box").slideDown();
// }
// else if(x=='b_login')
// {
// $("#login_box").slideDown();
// $("#b_login").css("visibility","hidden");
// $("#b_signup").addClass("active");
// $("#signup_box").css("visibility","visible");
// }
// });




	
</script>





</body>
</html>