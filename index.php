<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App-LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="w-400 p-5 shadow rounded">
    <form method="post" action="auth.php">
      <img src="img/logo.png" class="w-25" style="margin-left: 110px;">
      <h3>LOGIN</h3>
  <div class="mb-3">
    <label  class="form-label">User Name</label>
    <input type="email" class="form-control" >

  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="email" class="form-control" >

  </div>

  <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
  <a href="signup.php">SIGNUP</a>
</form>

    </div>
</body>
</html>
