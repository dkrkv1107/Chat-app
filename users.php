<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-app</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d4a213e92e.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper">
    <section class="users">
     <header>
         <div class="content">
             <img src="img.png" alt="">
             <div class="details">
                 <span>User Name</span>
                 <p>Active Now</p>

             </div>
         </div>
         <a href="#" class="logout">
              Logout
         </a>
     </header>
     <div class="search">
         <span class="text">
             Select User To Start Chat
         </span>
         <input type="text" placeholder="Enter Name To Search....">
         <button><i class="fas fa-search"></i></button>
     </div>
     <div class="users-list">
         <a href="#">
         <div class="content">
             <img src="img.png" alt="">
             <div class="details">
                 <span>User Name</span>
                 <p>Test Message</p>

             </div>
         </div>
         <div class="status-dot"><i class="fas fa-circle"></i></div>
         </a>
     </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
  

</body>
</html>