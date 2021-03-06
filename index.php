<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auth Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <form id="auth" method="post">
      <div class="input-group">
	<span class="input-group-addon" id="basic-addon1">Username</span>
	<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username">
      </div>
      <div class="input-group">
	<span class="input-group-addon" id="basic-addon1">Password</span>
	<input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password">
      </div>
      <input type="button" id="login" class="btn btn-primary" value="Login">
	  <input type="button" id="logout" class="btn btn-primary" value="Logout">
    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  <style>
    form {
      max-width:400px;
      margin:0 auto;
      margin-top:30px;
    }
    .input-group {
      margin-bottom:20px;
    }
  </style>
  <script>
	$(function(){
		$("#login").on("click", function() {
			$("#auth").attr("action", "/login.php");
			$("#auth").submit();
		});
		$("#logout").on("click", function() {
			$("#auth").attr("action", "/logout.php");
			$("#auth").submit();
		});
	});
  </script>
</html>

