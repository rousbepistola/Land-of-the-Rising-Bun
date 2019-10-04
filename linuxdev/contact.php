<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="Contact Page" content="Contact page of the land of the rising bun bake shop">
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

    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
body{
    font-family: 'Montserrat Alternates', sans-serif;
            letter-spacing: 0px;
}

        #contact-header {
            text-align: center;
            text-decoration: underline rgba(92,184,92 ,1 );;
            color: darkslategray;

        }
        #contactUsInfo1 {
            text-align: center;
            box-sizing: border-box;
            padding: 1em;

            margin-top: 5em;
            
        }
        #contactUsInfo2{
            text-align: justify;
            box-sizing: border-box;
            padding: 1em;
   
            margin-top: 5em;

        }

        #footerContact{
        
            position: fixed;
            bottom:0;
            height:7.5vh;
            margin-top:2em;
            background-color: rgba(92,184,92 ,1 );
            padding:1em;
            text-align: center;
        
        }

        #navbarCollapse {
            font-size: 1.2em;
            padding: 0 1em;
        }

        #contactImage{
            width: 90%;
            height:80%;
        }

        #carouselInner {
            width:40em;
            height:25em;
            margin: 0 auto 1em auto;
            
        }

        #carouselInner img{
            width:40em;
            height:30em;
            margin: 0 auto 5em auto;
            
        }

        #footerContact p{
            margin-bottom:0;
            padding-top:14px;
            color: rgba(0,0,0,1 );
            font-weight: bold;
        }

        @media only screen and (max-width: 500px) {


/* high priority to fix */
            #footerContact {
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

            #contactUsInfo1 {
                text-align: center;
                box-sizing: border-box;
                padding: 0;
                margin: em;
            
            }

            #contactUsInfo1 img{
                
                box-sizing: border-box;
                padding: 0;
                margin: 0;
            }
            
            #contactUsInfo2{
                text-align: center;
                box-sizing: border-box;
                padding: 0;
                margin: 1em;
                width:100%;

             }

             #test {
                 margin:0;
             }
        
            #carouselInner  {
                width:100%;
                height: 20em;;
            }
         
        }

        /* end of styling */
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
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="order.php" class="nav-item nav-link">Order Online</a>
                    <a href="contact.php" class="nav-item nav-link active">Contact</a>
                </div>
            </div>
        </nav>
   

          <!-- Main Content -->
    <div class="aboutContent">
        <div class="container-fluid">
            <div class="row" style="height: 7vh; margin-top:0.5em;
            margin-bottom:0.5em;" >
                <div class="col-md-12" id="contact-header">
                    <h1>
                      &nbsp;Contact Us&nbsp;
                    </h1>
                </div>
            </div>
           
               
            <div class="row" id="test">
                <div class="col-md-6" id="contactUsInfo1">
                 <!-- carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" id="carouselInner">
                    <div class="carousel-item active">
                    <img class="d-block w-100"  src="https://bit.ly/2pdCea7" alt="Croissant">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://bit.ly/2nFGRJB" alt="Good Bread">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://bit.ly/2GDabXm" alt="Lovely Bread">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://bit.ly/2ollRb2" alt="Nice Bread">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://bit.ly/2opz8zc" alt="Muffin">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- carousel ends -->
                </div>
                <div class="col-md-6" id="contactUsInfo2">
                    <h4>
                        Visit our downtown location
                    </h4>
                    <br>
                        <p>30 Yonge St Toronto, ON M5E 1X8 </p>
                        <p>Open from 7am-7pm daily</p>
                    <br>
                    <h4>
                        Delivery Schedule and Area
                    </h4>
                    <br>
                        <p>Deliveries limited to downtown TO area</p>
                        <p>Delivery schedule from 9am-5pm daily</p>
                        <p><i>Allow us to have 3 hours to prepare and deliver your freshly baked order</i></p>

                        <p><i class="fas fa-phone-alt">Give us a call at 647-527-3835</i></p>
                        <br> <br>
                </div>
            </div>

           
                


            <div class="row">
                    <div class="col-md-12" id="footerContact">
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
    </div>


    </body>
</html>