<?php
session_start();
include("headers.php");
include("navbar.php");
include("dashboard.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	#submit{
  background-color: #1CB94E;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #1CB94A;
  pointer:pointer;
  width:150px;
  text-align: center;
  margin-left: 50px; 
  margin-right: 140px;
}
#submit:hover,
#submit:focus,{
  color: #ff4;
  background-color: #1CA347;
  border-color: #1CA347;
}
</style>
</head>
<body>
<div class="container">
<h1>New Article Page</h1>
<!-- <hr class="divider col-md-offset-2"><div> -->
<!-- sidebar entry -->
<div class = "col-md-2">
</div>


	<div class = "col-md-8">
		<form action = "db_newarticle.php" method = "post">
			<div class = "container">
			<!-- <div class = "col-md-4"> -->
			<label for="arc_name">Heading</label>
			<input class="form-control col-md-4" type="text" id="arc_name" name="article_heading" required>
			
			<!-- </div> -->
			<br>
				<!-- <div class = "col-md-5"> -->
				<label for="arc_desc">Article Description</label>
				<textarea class="form-control" id="arc_desc" name="article_description" style="resize: none;" required>
				</textarea>
			<!-- </div>
			</div>
				<div class = "container">
			 -->
				<label for="arc_con">Content</label>
				<textarea class="form-control" id="arc_con" name="article_content" style="resize: none;" required>
				</textarea>
				<br><br><br>
				<div class = "form-group ">
        <div class= "col-sm-offset-2 col-sm-10 ">
   <input type="submit" name="newarticle_submit" id="submit" tabindex="4" class="form-control btn btn-register" value="SUBMIT">
        </div>
    </div>
			</div>
		</form>
		<!-- </div> -->
</div>
</div>
</body>
</html>