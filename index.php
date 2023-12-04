<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="images/x-icon" href="assets/icon.png">
        <title> LOG IN PAGE  |  Leaves of Life </title>
        <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
    </div>
        <div class="wrapper">
        <img class ="logo" src = "assets/logo.png">
        <div class="title"><center> LEAVES OF LIFE </center></span></div>
        <h3 align="center"> LOG IN </h3>
        <form name="f1" action="authentication.php" method="post" onsubmit="return validation()">
            
            <?php if(isset($_GET['error'])){
              echo '<script> alert("Account Details is incorrect. Try Again!")</script>';
            }
            ?> 

            <div class="row">
            <label class="label" for="user">USERNAME</label>
            <input class="text" type="text" id="user" name="user" placeholder="">
            </div>
            <div class="row">
            <label class="label" for="pass">PASSWORD</label>
            <!-- <i class="bi bi-eye-slash" id="togglePassword"></i> -->
            <input class="text" type="password" id="pass" name="pass" placeholder="">
            
            </div>
            <center><div class="row">
            <input class="button" type="submit" value="LOG IN">
            <button class="button" id="signup"><a href="signup.php" style="text-decoration:none;">SIGN UP</a></button>
            <button class="button2"><i class="fa fa-facebook fa-fw"></i> LOG IN WITH FACEBOOK </button><BR>
            <button class="button1"><i class="fa fa-google fa-fw"></i> LOG IN WITH GOOGLE </button>
            </form>    
        </center>
           
            <img class="img1" src="/New/assets/2.png">
            <img class="img2" src="/New/assets/1.png">
            <img class="img3" src="/New/assets/3.png">
            <img class="img4" src="/New/assets/4.png">
            <img class="img5" src="/New/assets/5.png">
        </div>
        <div class="colorbox"></div>
            
        <script>
            $('.signup').click(function() {
                $('input, select, div').each(function(){
                    $(this).removeAttr('required');
                })
            });
        </script>
        
        <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Username and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Username is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>

    <script>
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#pass");

            togglePassword.addEventListener("click", function () {
                // toggle the type attribute
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
                
                // toggle the icon
                this.classList.toggle("bi-eye");
            });

            // prevent form submit
            const form = document.querySelector("form");
            form.addEventListener('submit', function (e) {
                e.preventDefault();
            });
        </script>


    </body>
</html>