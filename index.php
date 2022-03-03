
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petpark_community</title>

    <!-- CSS only -->
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
    

    <!------------------------chat boot------------------------------------------------------------>
   
    
</head>
<style>

@font-face
{
  font-family:'orinthia-Regularc';
  src:url('./Corinthia_1/Corinthia-Regular.ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('truetype');
}



nav 
{
position: fixed;
background-color:rgba(0, 0, 0, 0.6);

}
#next-section 
{
background-image: url(./Colored\ Patterns.svg);
}


#information 
{
height: 300px;

background: url(./back.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}

#information::after 
{
background-color: rgba(33, 44, 74, 0.9);   
}
#exampleModa
{
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
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
#contact::after {
  background-color: rgba(33, 44, 74, 0.9);
  width: 100%;
  height: 100%;
  content:"";
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
}
@font-face
{
  font-family:'orinthia-Regularc';
  src:url('./Corinthia_1/Corinthia-Regular.ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('ttf');
  src:url('./Corinthia_1/Corinthia-Regular.ttf')format('truetype');
}
img 
{
  filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.5))
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


#information 
{
height: auto;
background: url(./picture/Colored\ Patterns.svg);
background-repeat: no-repeat;
background-size: cover;
}

</style>
<body>
  <?php  include("./header.php"); ?>

     <!-----------section-------------------------------------------------------------------->
     <div class="spinner_wraped"><div class="spinner"></div></div>
     <section class="bg-dark text-light p-5 text-center text-sm-start mt-5" id="pe">
         <div class="container"> 
             <div class="d-sm-flex align-items-center justify-content-between">
                   <div class="mt-md-5 mt-sm-5 mt-5">
                    <h1> <span class="text-danger">Petpark-community for</span><span class="text-warning"> you!!!!!</span></h1>
                    <p class="lead"> 
                       Don't concetrate much to find the solution in website developnment.
                       Petpark try to solve your problem..

                    </p>
                    <a href="./information.php" type="button" class="btn" style="background-color: #2BF806;">service for you</a>
                   </div>
                   <img src="./picture/kisenya.jpg" class="img-fluid w-50 d-none d-sm-block mt-5" style="height:450px;">
             </div>
         </div>
         <hr>
     </section>
     <!------------------------bOX---------------------------------------------->
  <section class="p-5" id="next-section">
  <div class="container mt-5" style="padding-top:50px;">
    <div class="row text-center g-4">
        <div class="col-md">
            <div class="card bg-dark text-light">
                <div class="card-body text-center">
                    <div class="h1 mb-3">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h3 class="card-title mb-3">
                        service
                    </h3>
                    <p class="card-text">
                        Your problem our problem .Technology 
                        expand every day.Petpark provide service according 
                        to the need of customer. The following is our service we 
                        provide.
                    </p>
                    <button id="servicep" class="btn btn-primary">Lead more</button>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card bg-dark text-light">
                <div class="card-body text-center">
                    <div class="h1 mb-3" style="color:magenta;">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="card-title mb-3">
                       Busness 
                    </h3>
                    <p class="card-text">
                        Think smart.Be closer to your customermshare your product world wide 
                        by petpsark community site.Be special and smart for more detail read more below.
                    </p>
                    <a href="./busness.php" class="btn btn-primary">Lead more</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card bg-dark text-light">
                <div class="card-body text-center">
                    <div class="h1 mb-3">
                        <i class="bi bi-file-earmark"></i>
                    </div>
                    <h3 class="card-title mb-3">
                        Knowledge
                    </h3>
                    <p class="card-text">
                        For now day technology is rapidly grow so much. 
                        Artificial Intelligence at this time grow and make
                        the life easy.Use artificial intelligence for your busness.
                          
                    </p>
                    <a href="https://freepngimg.com/png/32667-black-cherry-transparent-background" class="btn btn-primary">Lead more</a>
                </div>
            </div>
        </div>
    </div>
</div>
  </section>
  <!-----------------------anather page-->
  <section class="bg-dark text-light p-5 text-center text-sm-start" id="pe">
    <div class="container"> 
        <div class="d-sm-flex align-items-center justify-content-between">
            <img src="./picture/nathanaeli.png" class="img-fluid w-50 d-none d-sm-block">
              <div>
               <h1>Don't wait where  <span class="text-warning">here!!!!!</span></h1>
               <p class="lead"> 
                The Internet penetration rate in Tanzania more than doubled between 2013 and 2020, reaching 49 percent in 2020. That same year, 89 percent of the population were using a voice telecom service.petpark save you to be with customer by creating android application.
               </p>
               <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 service for you
               </button>
               
              </div>
        </div>
    </div>
</section>

<!--------------------------------------about Ceo-->
<section class="p-1" id="information">
   <div class="container">
       <div class="row align-items-center justify-content-between">
        <div class="col-md p-5 text-primary">
            <h1 style="font-family: 'Mulish', sans-serif;">Lean with petpark</h1>
            <p class="lean text-light">
                Petpark provide offer to learn how to create website and provide short couse 
                for computer application.Don't wait the world change be the part of change by 
                joining with petpark community. Influence friend to join to petpark community.
                Don't wait.
            </p>

            <p class="lean text-light mt-3">
                Petpark provide offer to learn how to create website and provide short couse 
                for computer application.Don't wait the world change be the part of change by 
                joining with petpark community. Influence friend to join to petpark community.
                Don't wait.
            </p>

            <button class="btn btn-primary mt-3">
                Join here
            </button>
        </div>

          <div class="col-md">
              <img src="./picture/website.png" class="img-fluid">
          </div>
    
       </div>
   </div>
</section>

<!-- Modal for servicess-->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
            <li>Software Development</li>
            <li>Web developnment</li>
            <li>Busness advertisment</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>




<!---------------------------contact with petpark community don't miss -->
<section class="bg-dark text-light p-5 text-center text-sm-start">
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row g-5">
                    <div class="col-md-12">
                        <h2 class="f-title">Company Info</h2>
                    </div>
                    <div class="col-md-12">
                        <p>Petpark goal is to make easy communication between the organization,compuny and institution to customer by providing </p>
                    </div>
                    <div class="col-md-12"><a class="os-apple" href="#!"></a></div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="row g-5">
                    <div class="col-md-12"><h2 class="f-title">Service</h2></div>
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">UI Design</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">App Development</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">Content Writing</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">SEO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="row g-5">
                    <div class="col-md-12">
                        <h2 class="f-title text-danger">Links</h2>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">Who We Are</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">Our Features</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">Services We Provide</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row g-5">
                    <div class="col-md-12">
                        <h2 class="f-title  text-secondary">Recent Posts</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-4 pt-2"><img class="img-fluid" src="./java.jpg"
                                    alt=""></div>
                            <div class="col-8">
                                <a href="#">programming in java is best for android developnment.</a>
                                <div class="date">September 19, 2020</div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 pt-2"><img class="img-fluid" src="./picture/ai.jpg"
                                    alt=""></div>
                            <div class="col-8">
                                <a href="#">Artificial interjence is best for now days become smart</a>
                                <div class="date">September 19, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div class="footer-copyright mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-wrap align-content-center">
                    <div class="copyright">
                        <p>
                            © 2021 <a href="https://web.facebook.com/Software-engineer-101302345635504?notif_id=1640467141486806&notif_t=aymt_page_post_reminder_14d_notification&ref=notif">petpark@gmail.com</a> All Rights Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-content-center">
                    <ul class="f-menu d-flex mr-auto ml-auto">
                        <li><a href="#">Privacy &amp; Policy</a></li>
                        <li><a href="#">Terms And Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>


<script src="./index.js"></script>
<script src="./js/custom.js"></script>
<script type="text/javascript">
	portfolioList = document.querySelectorAll('.portfolio-box');
	portfolioList.forEach(function(portfolioPic) {
		portfolioPic.addEventListener('click',function(){
			bg = this.style.backgroundImage;
			document.getElementById('port_pop_pic_bg').classList.add("active")
			document.getElementById('port_pop_pic').style.backgroundImage = bg
			document.getElementById('port_pop_pic').classList.add("active")
		});	
	})
	document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
			document.getElementById('port_pop_pic_bg').classList.remove("active")
			document.getElementById('port_pop_pic').classList.remove("active")
	})
</script>
</body>
</html>