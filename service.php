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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
    <style>



.accordion {
  color: #A6C309;
  cursor: pointer;
  padding: 18px;
  width:100%;
  background:#12386D;
  border: none;
  text-align: left;
  border-radius:12px;
  margin:2px;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.accordion:hover
{
 background:#053551;
 color:white;
}

.panel {
  padding: 0 18px;
  display: none;
  overflow: hidden;
}
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
         <div class="container text-danger"> 
             <div class="d-sm-flex align-items-center justify-content-between">
                   <div class="mt-sm-5  mt-5">
                       <h1 class="text-center">Team and service</h1>

                       <button class="accordion">Web developnment</button>
                       <div class="panel">
                       <p>Petpark offer Web developnment for friendly price,
                        Web site with beutifully user interface and also with security.
                        Don't waste your time. for more information send your informmation 
                        in contact us section.
                        </p>
                        </div>

                      <button class="accordion">Advertisment busness</button>
                      <div class="panel">
                     <p>Advertise now your busness using petpark community compuny</p>
                     </div>

                     <button class="accordion">Android and software developnment</button>
                     <div class="panel">
                     <p>Advertise now your busness using petpark community compuny.</p>
                     </div>

                    <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                    panel.style.display = "none";
                     } else {
                    panel.style.display = "block";
                       }
                      });
                     }          
                     </script>
                 </div>
                   <img src="./picture/android.png" class="img-fluid w-50 d-none d-sm-block">
             </div>
         </div>
     </section>


     <section class="bg-white text-light">
        <div class="container">
            
        </div>  
     </section>

     <?php   
     include("./footer.php");
     ?>

</body>
</html>