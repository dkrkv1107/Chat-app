<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App-SIGN-UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="w-400 p-5 shadow rounded">
    <form method="post" action="signup2.php">
      <img src="img/logo.png" class="w-25" style="margin-left: 110px;">
      <h3>SIGN-UP</h3>
      <?php if(isset($_GET["error"])){ ?>
      <div class="alert alert-warning" role="alert">
     <?php echo htmlspecialchars($_GET["error"]); ?>
      </div>
      <?php } 

      if(isset($_GET['name'])){
          $name = $_GET['name'];
      }
      else  $name=' ';

      if(isset($_GET['username'])){
        $name = $_GET['username'];
    }
    else  $username=' ';

?>
      <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text"  name="name"  value="<?=$name?>" class="form-control" >

  </div>
  <div class="mb-3">
    <label  class="form-label">User Name</label>
    <input type="text" class="form-control" name="username" value="<?=$username?>" >

  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" name="password">

  </div>
  <div class="mb-3">
    <label  class="form-label">Profile Picture</label>
    <input type="file" class="form-control" name="profilepic" >

  </div>

  <button type="submit" class="btn btn-primary" name="submit">SIGN-UP</button>
  <a href="index.php">LOGIN</a>
</form>

    </div>
</body>
</html>