<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="images/x-icon" href="assets/icon.png">
        <title> SIGN UP PAGE  |  Leaves of Life </title>
        <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
    
        <div class="wrapper">
        <img class ="logo" src = "assets/logo.png">
        <div class="title"><center> LEAVES OF LIFE </center></span></div>
        <h3 align="center"> SIGN UP </h4>
        <form action="Newacc.php" method="post">
            <div class="row">
            <label class="label" for="fn">FIRSTNAME</label>
            <input class="text" type="text" id="fn" name="firstName" placeholder="" required>
            </div>
            <div class="row">
            <label class="label" for="ln">LASTNAME</label>
            <input class="text" type="text" id="ln" name="lastName" placeholder="" required>
            </div>
            <div class="row">
            <label class="label" for="em">EMAIL</label>
            <input class="text" type="text" id="em" name="email" placeholder="" required>
            </div>
            <div class="row">
            <label class="label" for="us">USERNAME</label>
            <input class="text" type="text" id="us" name="username" placeholder="" required>
            </div>
            <div class="row">
            <label class="label" for="pw">PASSWORD</label>
            <input class="text" type="password" id="pw" name="password" placeholder="" required>
            </div>
            <div class="row">
            <label class="label1" for="cpw">CONFIRM <br> PASSWORD</label>
            <input class="text" type="password" id="cpw" name="cpassword" placeholder="" required>
            </div>
            <center><div class="row">
            <input class="button" type="submit" value="SUBMIT">
            <input class="button" type="reset" value="CLEAR"> <br>
            <a class="back" href="index.php"> Already have an account? </a> 
            </form>
            </center>
            
            <img class="img1" src="/New/assets/2.png">
            <img class="img2" src="/New/assets/1.png">
            <img class="img3" src="/New/assets/3.png">
            <img class="img4" src="/New/assets/4.png">
            <img class="img5" src="/New/assets/8.png">
            </div>

            <div class="colorbox">


            </div>
            
   
        
        </div>

        <?php 
        if(isset($_GET['success'])){
              echo '<script> alert("Account Registered Successfully!");document.location="index.php";</script>';
            }
            ?> 

    </body>
</html>