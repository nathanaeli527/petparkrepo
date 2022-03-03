<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register here</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./petpark.png" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
    <style>
        #pe 
        {
            background-image: url("./picture/Colored Patterns.svg");
        }
        
        input[type="text"]
        {
            background-color:seagreen;
        }
        .submit 
        {
          height:100px;
          width: 100px; 
          border-radius: 50%;
          color: white;
          background-color: maroon;
        }



        @font-face
{
  font-family:'orinthia-Regularc';
  src:url('./Corinthia_1/Corinthia-Regular.ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('truetype');
}



@font-face
{
  font-family:'orinthia-Regularc';
  src:url('./Corinthia_1/Corinthia-Regular.ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('truetype');
}


#pe 
{
font-family: 'Murecho', sans-serif;
background-image: url("./picture/Colored Patterns.svg");

}

nav 
{
position: fixed;
background-color:rgba(0, 0, 0, 0.6);

}
#next-section 
{
background-image: url(./picture/Colored\ Patterns.svg);
}


#information 
{
height: auto;
background: url(./picture/Colored\ Patterns.svg);
background-repeat: no-repeat;
background-size: cover;
}

    </style>
</head>
<body>
    <?php include("header.php"); ?>
 
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="pe">
    <div class="container"> 
        <div class="d-sm-flex align-items-center justify-content-between">
            <img src="./picture/contactus.png" class="img-fluid w-50 d-none d-sm-block mt-5" height="100px" >              <div>
              <form> 
                          <div class="form-group">
                              <label for="name">Username</label>
                              <input type="text" class="form-control" name="username" id="name" require>
                          </div>

                          <div class="form-group">
                              <label for="name">Email</label>
                              <input type="text" class="form-control" name="email" id="Email" require>
                          </div>
                          
                          <div class="form-group">
                              <label for="name">Phone number</label>
                              <input type="text" class="form-control" name="phone" id="Phone" require>
                          </div>

                           
                          <div class="form-group">
                              <label for="name">Location</label>
                              <input type="text" class="form-control" name="location" id="location" require>
                          </div>

                          <div class="form-group">
                              <label for="name">Password</label>
                              <input type="text" class="form-control" name="password" id="password" require>
                          </div>
                          <button class="btn mt-3 mx-5 contact-us submit" id="savebutton">submit</button> 
                     </form>
              </div>
        </div>
    </div>
</section>    
<script>
$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();
        var formValues = $(this).serialize();
        $.post("regsend.php", formValues, function(data){
            $("form")[0].reset();
        });
    });
});
</script>
<?php
include("./footer.php");
?>
</body>
</html>