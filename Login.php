<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<html>
<h1>Login</h1>
<form class="col-xs-2" method="post" action="login_confirm.php">
    <div class="form-group">
        <label for="user">Name:</label>
    <input type="text" name="username" placeholder="username" class="form-control">
        <label for="pass">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
    <input type="submit">
</form>
<hr>
<a href="register.php">Register here</a>
</html>