<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website_info</title>
    <script src="./css/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./petpark.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
    <style>
          body::after
    {
        height:60px;
        display: block;
        
    }
#contact
{
  padding-top: 60px;
  position: relative;
  z-index: 1;
  background: url(./picture/back.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
@font-face
{
  font-family:'orinthia-Regularc';
  src:url('./Corinthia_1/Corinthia-Regular.ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('truetype');
}

#petpark 
{
font-family: 'orinthia-Regularc'
}
#pe 
{
font-family: 'Murecho', sans-serif;
background-image: url(./picture/Polygon\ Luminary.svg);

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

#petpak 
{
font-family: 'orinthia-Regularc';
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
   
    <?php include("./header.php")?>
     <!-------------------------more about petpark community--------------------------->
     <section class="bg-dark text-light p-5 text-center text-sm-start" id="pe">
         <div class="container"> 
             <div class="d-sm-flex align-items-center justify-content-between">
                   <div class="mt-sm-5 mt-md-5 mt-5">
                    <h3>
                    An advantage of having a website is your business information and details about your products and services can be accessed by anyone, no matter where they are on the planet or what time of day it is. The internet is online 24 hours a day, 7 days a week. So even if your business isn't open your website will be!
                    </h3>
                   </div>
                   <img src="./picture/net.png" class="img-fluid w-50 d-none d-sm-block">
             </div>
         </div>
     </section>



     <?php   
     include("./footer.php");
     ?>
</body>
</html>