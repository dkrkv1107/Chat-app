<?php
include_once "header.php";

?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
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



</body>

</html>