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
    <section class="chat-area">
     <header>
         <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
         <div class="content" style="display: flex;">
             <img src="img.png" alt="">
             <div class="details">
                 <span>User Name</span>
                 <p>Active Now</p>

             </div>
         </div>
       
     </header>
     <div class="chat-box">
         <div class="chat outgoing">
             <div class="details">
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa provident voluptates</p>
             </div>
            
         </div>
         <div class="chat incoming">
             <img src="img.png" alt=" ">
             <div class="details">
             <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa provident voluptates</p>
             </div>
          </div>
     </div>
     <form action="#" class="typing-area">
         <input type="text" placeholder="Type message to send.....">
         <button><i class="fab fa-telegram-plane"></i></button>
     </form>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>