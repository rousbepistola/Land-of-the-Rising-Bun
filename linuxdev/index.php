<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="Land of the rising bun" content="Home page of the land of the rising bun bake shop">
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

    <style>
        body {
            font-family: 'Montserrat Alternates', sans-serif;
            letter-spacing: 0px;
            /* background: rgba(205,112,179 ,0.4 ); */
            background: whitesmoke;      
        }

        h3{
            color: darkslategray;
        }

        .col-md-6 img {
            width: 95%;

            height:60%;
            margin:25% auto;
            
            
        }
        .col-md-12 img {
            margin:0 auto;
            width:100%;
            height:80%;
            border-bottom: rgba(92,184,92 ,1 ) 3px solid;
            border-top: rgba(92,184,92 ,1 ) 3px solid;
            
        }

        #main-article {
            background-color:  rgba(245,222,179 ,0.0 );
            height:100%;
            padding: 1em 1em 0 1em;
            border-radius:5%;
        }

        #main-article p{
            padding: 0 3em 0 1em;
        }

        .headermessage {
            margin: 19px;
            color: darkslategray;
            font-family: 'Cabin', sans-serif;
            font-size: 16px;
            font-weight: bold;
            }
        .image-block {
                border: 3px solid white ;
                background-color: black;
                padding: 0px;    
                margin: 0px;
                height:200px;
                text-align: center;
                vertical-align: bottom;

                
            }
        .image-block > p {
                width: 100%;
                height: 100%;
                font-weight: normal;
                font-size: 19px;
                padding-top: 80px;
                background-color: rgba(3,3,3,0.0);
                color: rgba(6,6,6,0.0);
            }
        .image-block:hover > p {
                background-color: rgba(3,3,3,0.5);    
                color: white;    
                text-decoration:none;
            }

        #footerIndex {
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

        #navbarCollapse {
            font-size: 1.2em;
            padding: 0 1em;
        }

        #footerIndex p{
            margin-bottom:0;
            padding-top:14px;
        
        }

        @media only screen and (max-width: 500px) {

            #footerIndex {
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

        #main-article {
            height:140vh;
        }
        }




    </style>


    </head>
    <body>

    <div class="container-fluid">
        
    </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light" >
            <a href="#" class="navbar-brand">
                <img src="./logo.png" height="80" alt="CoolBrand" style="border-radius:50%;">
                
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav" >
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="order.php" class="nav-item nav-link">Order Online</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row" style="height: 85vh;" >
                <div class="col-md-12" >
                <img src="./media/ultimateBanner2.png" alt="bread basket">
                </div>

                <!-- Header -->
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3>Fall Inlove, Smell the Flours, Give in... Bite</h3>
                    </div>
                </div>

                <!-- image tiles -->
                <div class="col-md-6" id="main-left" >
                    
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-md-12">
                            <h3 class="headermessage"></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="image-block col-sm-4" style="background: url(https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center top;background-size:cover;">
                                <p>Freshly Baked </p>
                            </div>
                            <div class="image-block col-sm-8" style="background: url(https://images.pexels.com/photos/745988/pexels-photo-745988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center top;background-size:cover;">
                                <p>Lovely aroma</p>
                            </div>
                            <div class="image-block col-sm-4" style="background: url(https://images.pexels.com/photos/1387070/pexels-photo-1387070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center top;background-size:cover;">
                                <p>Delicious</p>
                            </div>
                            <div class="image-block col-sm-4" style="background: url(https://images.pexels.com/photos/2434/bread-food-healthy-breakfast.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center top;background-size:cover;">
                                <p>Perfect</p>
                            </div>
                            <div class="image-block col-sm-4" style="background: url(https://images.pexels.com/photos/1871024/pexels-photo-1871024.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center top;background-size:cover;">
                                <p>Almost Magical</p>
                            </div>
                            <div class="image-block col-sm-8" style="background: url(https://images.pexels.com/photos/1739748/pexels-photo-1739748.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500) no-repeat center top;background-size:cover;">
                                <p>Visit Us : 30 Yonge St Toronto, ON M5E 1X8</p>
                               
                            </div>
                            <div class="image-block col-sm-4" style="background: url(https://images.pexels.com/photos/1118332/pexels-photo-1118332.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center top;background-size:cover;">
                                <p>waiting for your bite</p>            
                            </div>
                        </div>
                    </div>
<!-- <img src="./media/breadbasket.png" alt="bread basket"> -->
                </div>
                
                <br>

                <div id="main-article" class="col-md-6">
                    <!-- Category -->
                    <a href="#!" class="green-text">
                        <h6 class="font-weight-bold mb-3" style=" padding:1em; text-align:justify;  width:100%;"><i class="fas fa-utensils pr-2"></i>LOTRB: What's new?</h6>
                    </a>
                    <!-- Post title -->
                    <h3 class="font-weight-bold mb-3"><strong>Just in! We do Deliveries!!! <i class="fas fa-cookie"> </i>&nbsp;</strong></h3>
                    <!-- Excerpt -->
                    <p>Since our establishment at the beginning of the year, you supported our growth 
                        tremendously. The surge of customers are overwhelming and we can feel that we bacame part of your daily life.</p>
                    <p>We know that life could be busy and you cannot visit our shop every time. Starting this fall, we decided to support 
                        delivery to your home (area restricted to downtown TO). By winter, weekly bread subscription will be possible(hooray!).
                    </p>
                    <p>Give us a call, visit our shop, or see our about page for more details.</p>
                    <!-- Post data -->
                    <p>by <a><strong>Rous</strong></a>, 09/29/2019</p>
                    <!-- Read more button -->


                      <!-- Post title -->
                      <h3 class="font-weight-bold mb-3"><strong>weekly deal is here! <i class="fas fa-bread-slice"> &nbsp;</i></strong></h3>
                    <!-- Excerpt -->
                    <p> Craving for Muffins but you are on a diet? our muffin calories don't count... Okay it does! but 
                        how can you resist the<i><b> buy 4 free 1</b></i> muffin deal of the week? I figured you can't.
                    </p>
                    <p>Visit our shop and catch the Muffin Fever.</p>
                    <!-- Post data -->
                    <p>by <a><strong>Nabil</strong></a>, 09/22/2019</p>
                    <!-- Read more button -->

                    <a href="order.php"> <button type="button" class="btn btn-success">Order Online</button></a>
            <br><br>&nbsp; 
                </div >

            

                <!-- footer fix: you have got to have a better fix than this -->
            <!-- <div style="height: 250px; color: rgba(0,0,0,0);">a</div> -->






            <div class="col-md-12" id="footerIndex">
                <div class="col-md-12">
                <p> <b> LOTRB &reg; ESTABLISHED | 2019 | 30 Yonge St Toronto, ON M5E 1X8</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
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