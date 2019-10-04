<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="Delivery Page" content="Delivery page of the land of the rising bun bake shop">
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


        <script src="" async defer>
           function successful() {
            document.getElementById("success_message").style.display = "block";
            }
        </script>

        

    <style>
        body {
            background-image:url("https://bit.ly/2oeUe3m");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Montserrat Alternates', sans-serif;
            letter-spacing: 0px;
              
        }

        #navbarCollapse {
            font-size: 1.2em;
            padding: 0 1em;
        }

        .details p{
                color: darkslategray;
        }

        .details h2 {
                color: darkslategray
        }

        #success_message{ display: none;}

        #footerDelivery {
                position: fixed;
                bottom:0;
                height:7.5vh;
                margin-top:2em;
                background-color: rgba(92,184,92 ,1 );
                padding:1em;
                text-align: center;
        }
            
        #formcolor{
                color:white;
                background-color: rgba(0,0,0 ,0.3 );
                text-align: justify;
                box-sizing: border-box;
                padding-bottom: 10em;
                padding-top: 5em;
                margin:0 0 3em 0;
        }

        #formcolor input {
                width: 100%;
        }

        #delivery-header{
                text-align: justify;
                text-decoration: underline rgba(92,184,92 ,1 );
                color: white;
              
              

        }

        #navbarCollapse {
            font-size: 1.2em;
            padding: 0 1em;
        }

        #footerDelivery p{
            margin-bottom:0;
            padding-top:14px;
            color: rgba(0,0,0,1 );
            font-weight: bold;
        }

        @media only screen and (max-width: 500px) {

            #footerDelivery {
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
            background-image:url("https://bit.ly/2oeUe3m");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Montserrat Alternates', sans-serif;
            letter-spacing: 0px;
              
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
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="delivery.php" class="nav-item nav-link active" >Delivery</a>
                </div>
            </div>
        </nav>



        


        <!-- MAIN CONTENT FOR ABOUT PAGE-->
        <div class="container-fluid" id="formcolor">

        <div class="container-fluid">
            <div class="row" style="height: 7vh; margin-top:0.5em;
            margin-bottom:0.5em;" >
                <div class="col-md-12" id="delivery-header">
                    <h1>
                      &nbsp;Delivery&nbsp;
                    </h1>
                </div>
            </div>
        </div>



                <form class="well form-horizontal"  method="GET"  id="contact_form" action="#" >
                <fieldset>

                <!-- Form Name -->
                <i>Payment of Cash or Card on delivery</i>

                <!-- Text input-->

                <div class="form-group" >
                <label class="col-md-4 control-label">First Name</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                </div>
                </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label> 
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                </div>
                </div>
                </div>

                <!-- Text input-->
                    <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                </div>
                </div>
                </div>


                <!-- Text input-->
                    
                <div class="form-group">
                <label class="col-md-4 control-label">Phone #</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
                </div>
                </div>
                </div>
                            

             
                <!-- Text area -->

                <div class="form-group">
                <label class="col-md-4 control-label">Delivery Time & Special Instructions</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="comment" placeholder="Delivery Time & instructions"></textarea>
                </div>
                </div>
                </div>

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                <button type="submit" class="btn btn-warning" onclick="successful();" value="button text">Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
                </div>

                </fieldset>
                </form>
        </div>
                </div><!-- /.container -->

                                                <!-- END OF MAIN CONTENT FOR ABOUT PAGE-->


            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" id="footerDelivery">
                    <p>  LOTRB &reg; ESTABLISHED | 2019 | 30 Yonge St Toronto, ON M5E 1X8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <i class="fab fa-instagram">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <i class="fab fa-facebook-messenger"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <i class="fab fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <i class="fab fa-canadian-maple-leaf"> Proudly Canadian</i>
                    </i></p>
                        
                    </div>
                </div>
            </div>
   
        <script>    
            function successful(){
                alert("Order Sent to our team, please wait for our phone call within 10 minutes for order completion");
            }
        </script>

    </body>
</html>