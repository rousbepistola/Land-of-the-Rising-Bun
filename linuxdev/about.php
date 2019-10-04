<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="About Page" content="About page of the land of the rising bun bake shop">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css">
        <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates&display=swap" rel="stylesheet">

    <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--FontAwesome  -->
        <script src="https://kit.fontawesome.com/3d3ae9b37d.js" crossorigin="anonymous"></script>
        <script src="" async defer></script>


        <!-- style -->
        <style>
            body {
                background-color: lightblue;
                background: url("https://bit.ly/2p51PC7");
                background-size: cover;
                background-repeat: no-repeat;
                font-family: 'Montserrat Alternates', sans-serif;
            letter-spacing: 0px;
            }


            #navbarCollapse {
            font-size: 1.2em;
            padding: 0 1em;
        }

            #about-header{
                text-align: center;
                text-decoration: underline rgba(92,184,92 ,1 );
                color: darkslategray;
            }

            #aboutUsInfo1 {
                text-align:center; 
                background: rgba(245,222,179 ,0.7 );
                box-sizing:border-box; 
                padding:1em; border-radius:2%;
                margin: 1em auto;
            }
            #aboutUsInfo2 {
                text-align:center; 
                background: rgba(245,222,179 ,0.7 );
                box-sizing:border-box; 
                padding:1em; 
                border-radius:2%;
                margin: 1em auto;
            }

            .aboutContent {
                height: 80vh;
               
            }
        

            h4 {
                text-decoration: underline black solid;

            }
            h4, h6{
                color: black;
            }

            p,i {
                color: rgba(0,0,0,1 );
                /* font-weight: bold; */
              
            }

            #footerAbout {
                position: fixed;
            bottom:0;
            height:7.5vh;
            margin-top:2em;
            background-color: rgba(92,184,92 ,1 );
            padding:1em;
            text-align: center;
            color: rgba(0,0,0,1 );
            font-weight: bold;
            }

            #footerAbout p{
            margin-bottom:0;
            padding-top:14px;
        }

        @media only screen and (max-width: 500px) {

            #footerAbout {
                position: fixed;
                bottom:0;
                height:7vh;
                margin-top:2em;
                background-color: rgba(92,184,92 ,1 );
                padding:0.5em;
                text-align: center;
                color: rgba(0,0,0,1 );
                font-weight: bold;
                font-size: 10px;
                }

                body {
                background-color: lightblue;
                background: url("https://cdn.pixabay.com/photo/2015/04/18/09/45/pattern-728510_960_720.png");
                
            }
            }
        </style>
    
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a href="#" class="navbar-brand">
                <img src="./logo.png" height="80" alt="CoolBrand" style="border-radius:50%;">
                
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <a href="order.php" class="nav-item nav-link">Order Online</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>


        <!-- Main Content -->
    <div class="aboutContent">
        <div class="container-fluid">
            <div class="row" style="height: 7vh; margin-top:0.5em;
            margin-bottom:0.5em;" >
                <div class="col-md-12" id="about-header">
                    <h1>
                      &nbsp;About Us&nbsp;
                    </h1>
                </div>
            </div>
            <div class="row" style="height: 72vh; box-sizing:border-box;" >
                <div class="col-md-3"></div>

                <div class="col-md-6" style="text-align:center; background: rgba(245,222,179 ,0.7 ); 
                box-sizing:border-box; padding:1em; border-radius:2%;
                ">
                    <h4>We create delicious memories</h4>
                    <h4>just like Home </h4>
                    <p>Most of us have a memory of a food that takes us back to childhood. </p>
                    <p>It can be as simple as a muffin that we used to get as a treat during our youth,</p> 
                    <p>or more involved like a cake on your first baking disaster.</p>
                    <h6>We would make you feel at home by invoking your good childhood</h6>
                    <h6>memories through having a bite of our baked goodies</h6>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                    <i style="color:green">reviewed  by -chef Anastasia from Beste Bäckerei&trade;  </i>
                </div>
                <div class="col-md-3"></div>
               

                <div class="col-md-5" id="aboutUsInfo1">
                    <h4>
                     We Deliver
                    </h4>
                    <br>
                    
                    <p>We deliver to downtown Toronto neighborhood</p>
                    <p>Delivery schedule from 9am-5pm daily</p>
                    <i>Allow us to have 3 hours to prepare and deliver your freshly baked order</i> 
                    <p></p>
                    <h6>Contact Us for More Details or Order Online now</h6>
                    <br> <br>
                    
                    <a href="order.php"> <button type="button" class="btn btn-success">Order Online</button></a>
                </div>
                <div class="col-md-5" id="aboutUsInfo2">
                    <h4>
                    Planning a meeting or a home party?
                    </h4>
                    <br>
                    
                    <p>We Make Oven-to-Table Food Like Our Family Made for Us.</p>
                    
                    <p>Give us the time and date, number of guests, and we will take care of your pastry needs</p>
                    <p>Complimentary disposables and coffee</p>
                   
                    <h6>Plan your party now</h6>
                    <br>
                    <a href="contact.php"> <button type="button" class="btn btn-success">Contact Us</button></a>
                    <br><br><br>
                </div>

                
                <div class="col-md-12" id="about-header">
                    <h1>
                      &nbsp;&nbsp;
                    </h1>
                </div>
            

               
                
            </div>
            <div class="row">
                <div class="col-md-12" id="footerAbout">
                <p>  LOTRB &reg; ESTABLISHED | 2019 | 30 Yonge St Toronto, ON M5E 1X8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <i class="fab fa-instagram">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <i class="fab fa-facebook-messenger"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <i class="fab fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <i class="fab fa-canadian-maple-leaf"> Proudly Canadian</i>
                </i></p>
                    
                </div>
            </div>
           
        
        </div>
    </div>
    </body>
</html>