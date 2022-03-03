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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous">
</script>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Oswald:wght@300&display=swap" rel="stylesheet"> 
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
    <style>

        .info
        {
            background-color: #923cb5;
            background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
            background-position: center;
            backface-visibility: hidden;
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
background: url(./picture/Colored\ Patterns.svg);

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
body
{
height: auto;
background: url(./picture/Colored\ Patterns.svg);
background-repeat: no-repeat;
background-size: cover;
}
.col img 
{
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
}
.first  
{
    
    width:50%; 
    margin-top: 50px;

}
.first img 
{
 border-radius: 10px;

}
.second  
{
  width: 50%;

}
.second span
{
    font-family: 'Oswald', sans-serif;
    text-shadow: 2px 2px 4px #000000;
}
.second li
{
    background:whitesmoke;
    cursor:pointer;
    text-size-adjust: 4px;
    font-family: 'Dancing Script', cursive;
}

           
ol {
  counter-reset: li; 
  list-style: none; 
  padding: 0;
  text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

ol a {
  position: relative;
  display: block;
  padding: .4em .4em .4em 2em;
  margin: .5em 0;
  background: #DAD2CA;
  color: #444;
  text-decoration: none;
  border-radius: .3em;
  transition: .3s ease-out;
}

ol a:hover { background: #E9E4E0; }
ol a:hover:before { transform: rotate(360deg); }
ol a:before {
  content: counter(li);
  counter-increment: li;
  position: absolute;
  left: -1.3em;
  top: 50%;
  margin-top: -1.3em;
  background: #f9dd94;
  height: 2em;
  width: 2em;
  line-height: 2em;
  border: .3em solid #fff;
  text-align: center;
  font-weight: bold;
  border-radius: 2em;
  transition: all .3s ease-out;
}


@media (max-width: 575.98px) { 
  .peimg 
  {
      height: 80%;
  }
   .second
   {
       margin-top: 50px;
   }
   .info 
   {
       width:374px;
       margin-left: 11px;
   }
   
 }




@media (min-width: 992px) and (max-width: 1199.98px) {

    .peimg 
  {
      height: 80%;
  }

 .second span
 {
     margin-top: 100px;
 }
}

@media (min-width: 1200px) { 
    .second span
 {
     margin-top: 100px;
 }
 .peimg 
  {
      height: 80%;
  }
 }

 
@media(max-width: 767.98px) { 
    .peimg 
  {
      height: 80%;
  }
  .info 
   {
       width:500px;
       margin-left: 11px;
   }
   #img
   {
       height: 100%;
   }

}


@media (min-width: 768px) and (max-width: 991.98px) { 
    .peimg 
  {
      height: 80%;
  }
  .info 
   {
       width:500px;
       margin-left: 11px;
   }
   
   #img
   {
       height: 100%;
   }
   
 }



@media (min-width: 992px) and (max-width: 1199.98px) { 
    .peimg 
  {
      height: 80%;
  }
  #img
   {
       height: 100%;
   }
 }

 .info li 
 {
     font-weight: bold;
     font-size: larger;
     font-family: Bebas Neue, cursive;
     margin-top: 10px;
     color:back;  
 }

 



    </style>
</head>
<body>
     <?php include("./header.php");?>
     <!-------------------------more about petpark community--------------------------->
 

     <div class="container pt-5 pb-5">
     <div class="row d-sm-flex align-items-center justify-content-between">
                <div class="col-sm mt-6 first">
                     <img src="./images/petpak.jpg" class="img-fluid mt-5 peimg">
                </div>
                <div class="col-lg  mt-6 second p-5 align-items-sm-center">
                    <span class="mx-8 text-light"><h2>More about Busness</h2></span>
                     <ul class="list-group mt-lg-5">
                     <li class="list-group-item"><h3>Products</h3></li>
                     <li class="list-group-item"><h3>Busness info</h3></li>
                     <li class="list-group-item"><h3>supporter</h3></li>
                     <li class="list-group-item"><h3>Comment from customer</h3></li>
                    </ul>
                </div>
            </div>
     </div>


     <section class="bg-dark p-5"> 
    
<div class="container">
  <div class="row">
        <div class="col-sm adverment_pat">
             <img src="./images/fashion.jpg" alt="" srcset="" class="w-100  shadow" id="img">
        </div>
    <div class="col-sm info p-5 text-danger">
        <div class="p-2 text-center bouder-ronded">
        <h3 style="font-family: 'Bebas Neue', cursive;">X-PLUS photograph</h3>
        </div>
        <hr>
                      
           <ol>
                <li class=""><a href="#">Photo Editing</a></li>
                <li class=""><a href="#">Video and Audio Record</a></li>
                <li class=""><a href="#">Wedding ornamentation</a></li>
                <li class=""><a href="#">Photo graphics and finder for photo location</a></li>
                <li class=""><a href="#">Gospal instrumental songs</a></li>
            </ol>
        <div class="col-md-6 mb-4">

</div>
    </div>
        <div class="col-sm adverment_pat">
              <img src="./images/p1.jpg" alt="" srcset="" class="w-100  shadow" id="img">
        </div>
   </div>
     </div>
     </section> 
     
    
    
     <?php   
     include("./footer.php");
     ?>
</body>
</html>