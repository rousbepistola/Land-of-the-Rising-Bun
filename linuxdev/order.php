<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="Order Page" content="Order page of the land of the rising bun bake shop">
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

    <style>
        body {
            background-image: url("https://images.pexels.com/photos/349610/pexels-photo-349610.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            font-family: 'Montserrat Alternates', sans-serif;
            letter-spacing: 0px;

        }
        
        .image-block {
                border: 5px solid rgba(255,255,255,0.6 ) ;
                background-color: black;
                padding: 0px;    
                margin: 0px;
                height:300px;
                text-align: center;
                vertical-align: bottom;
                

                
            }
        .image-block  p {
                width: 100%;
                height: 100%;
                font-weight: normal;
                font-size: 19px;
                padding-top: 80px;
                background-color: rgba(3,3,3,0.0);
                color: rgba(6,6,6,0.0);
            }
        .image-block:hover  p {
                background-color: rgba(3,3,3,0.5);    
                color: white;    
                text-decoration:none;
            }

        .image-block  button, input {
                background-color: rgba(3,3,3,0.0);
                color: rgba(6,6,6,0.0);
                /* position:absolute;
                bottom:0; */
                border:none;
            }
        .image-block:hover  button, input {
                background-color: rgba(3,3,3,0.5);    
                color: lightgreen;    
                /* border: 2px solid green; */
                border-radius: 5%;
                /* padding: 1em; */
            }
        
        button:focus { outline: none; }
        input:focus { outline: none; }

        .content-section {
             margin:  1em auto;
          }

        .shop-item-image {
            width: 300px;
        }

        #footerOrder {
                position: fixed;
                bottom:0;
                height:7.5vh;
                margin-top:2em;
                background-color: rgba(92,184,92 ,1 );
                padding:1em;
                text-align: center;
            }
        
            .cart-total{
                margin-bottom: 5em;
            }

        #footerOrder p{
            margin-bottom:0;
            padding-top:14px;
            color: rgba(0,0,0,1 );
                font-weight: bold;
        }

        #order-header {
            text-align: center;
            text-decoration: underline rgba(92,184,92 ,1 );
            color: darkslategray;
        }

        @media only screen and (max-width: 500px) {

        #footerOrder {
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
        }
    </style>


        <script src="" async defer></script>

    
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
                    <a href="order.php" class="nav-item nav-link active">Order Online</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
   


   <!-- Header -->
   <div class="container-fluid">
            <div class="row" style="height: 7vh; margin-top:0.5em;
            margin-bottom:0.5em;" >
                <div class="col-md-12" id="order-header">
                    <h1>
                      &nbsp;Delivery&nbsp;
                    </h1>
                </div>
            </div>
        </div>

<!-- shopping -->
            <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-md-12">
                            <h3 class="headermessage"></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="image-block col-sm-4"  style="background: url(https://bit.ly/2nL9qp5) no-repeat center;background-size:cover;">
                                <p  class="shop-item-title">Muffins / 10pcs $<span class="shop-item-price">20.00</span> <button class="shop-item-button">+</button> </p>
                                <p>  </p>
                                <img src="https://bit.ly/2nL9qp5" class="shop-item-image" style="display:none;" alt="">
                            </div>

                            <div class="image-block col-sm-4" style="background: url(https://bit.ly/2pgyBQP) no-repeat center top;background-size:cover;">
                                <p class="shop-item-title">Banana Loaf / 1 bread $<span class="shop-item-price">18.00</span> <button class="shop-item-button">+</button> </p>
                                <img src="https://bit.ly/2pgyBQP" style="display:none;"  class="shop-item-image" alt="">
                            </div>

                            <div class="image-block col-sm-4" style="background: url(https://bit.ly/2mO7mvW) no-repeat center top;background-size:cover;">
                                <p class="shop-item-title">Apple Pie / 1 pie $<span class="shop-item-price">24.99</span> <button class="shop-item-button">+</button> </p>
                                <img src="https://bit.ly/2mO7mvW" style="display:none;"  class="shop-item-image" alt="">
                            </div>

                            <div class="image-block col-sm-4" style="background: url(https://bit.ly/2pan9pD) no-repeat center top;background-size:cover;">
                                <p class="shop-item-title">Croissant / 10pcs $<span class="shop-item-price">22.00</span> <button class="shop-item-button">+</button> </p>
                                <img src="https://bit.ly/2pan9pD" style="display:none;"  class="shop-item-image" alt="">
                            </div>

                            <div class="image-block col-sm-4" style="background: url(https://bit.ly/2nymcav) no-repeat center top;background-size:cover;">
                                 <p class="shop-item-title">Loaf Bread / 1 bag $<span class="shop-item-price">13.00</span> <button class="shop-item-button">+</button> </p>
                                 <img src="https://bit.ly/2nymcav" style="display:none;"  class="shop-item-image" alt="">
                            </div>
                        
                            <div class="image-block col-sm-4" style="background: url(https://bit.ly/2peYrog) no-repeat center top;background-size:cover;">
                                <p class="shop-item-title">Macaroons / 12pcs $<span class="shop-item-price">28.00</span> <button class="shop-item-button">+</button> </p>  
                                <img src="https://bit.ly/2peYrog" style="display:none;"  class="shop-item-image" alt="">      
                            </div>

                            <!-- //experimental div -->
<!--                             
                            <div class="shop-item col-sm-4">
                                <span class="shop-item-title">Macaroons / 12pcs</span>
                                <img class="shop-item-image" src="https://bit.ly/2peYrog">
                                <div class="shop-item-details">
                                    <span class="shop-item-price">$28.00</span>
                                    <button class="btn btn-primary shop-item-button" type="button">Add To Cart</button>
                                </div>
                            </div> -->


                            <div class="col-md-12">
                                <h3>CART</h3>
                            </div>
                        </div>
                    </div>


                    <!-- CART -->
        <section class="container content-section">    
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM,</span>
                <span class="cart-price cart-header cart-column">PRICE, and</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
                <!-- <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="https://bit.ly/2nL9qp5" alt="muffin" width="100" height="100">
                        <span class="cart-item-title">Muffins</span>
                    </div>
                    <span class="cart-price cart-column">20.00</span>
                    <div class="cart-quantity cart-colum">
                        <input type="number" class="cart-quantity-input" value="3">
                        <button class="btn btn-danger" type="button">Remove</button>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="https://bit.ly/2pgyBQP" alt="muffin" width="100" height="100">
                        <span class="cart-item-title">Muffins</span>
                    </div>
                    <span class="cart-price cart-column">18.00</span>
                    <div class="cart-quantity cart-colum">
                        <input type="number" class="cart-quantity-input" value="1">
                        <button class="btn btn-danger" type="button">Remove</button>
                    </div>
                </div> -->
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$00.00</span>
                <a href="delivery.php"> <button class="btn btn-success btn-purchase" type="button">PURCHASE</button></a>
            </div>

            
           
        </section>

        <!-- <div class="row"> -->
            <div class="col-md-12" id="footerOrder">
            <p>  LOTRB &reg; ESTABLISHED | 2019 | 30 Yonge St Toronto, ON M5E 1X8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <i class="fab fa-instagram">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <i class="fab fa-facebook-messenger"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <i class="fab fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <i class="fab fa-canadian-maple-leaf"> Proudly Canadian</i>
            </i></p>
                
            </div>
        <!-- </div> -->
        

        



                                    <!-- JS for cart-->
<script async>

    if(document.readyState == 'loading'){
        document.addEventListener('DOMContentLoaded', ready)
    } else {
        ready()
    }


function ready(){
  var removeCartItemButtons =  document.getElementsByClassName('btn-danger');
  console.log(removeCartItemButtons); 

  for(var i=0; i<removeCartItemButtons.length; i++){
      var button = removeCartItemButtons[i];
      button.addEventListener('click', removeCartItem);
  }

  //input event
  var quantityInputs = document.getElementsByClassName('cart-quantity-input')
  for (var i = 0; i < quantityInputs.length; i++){
      var input = quantityInputs[i]
      input.addEventListener('change',quantityChanged)
  }

  //add to cart events
  var addToCartButtons = document.getElementsByClassName('shop-item-button')
  for (var i = 0; i < addToCartButtons.length; i++){
      var button = addToCartButtons[i]
      button.addEventListener('click', addToCartClicked)

  }
}


function removeCartItem(event){
        var buttonClicked = event.target;
        buttonClicked.parentElement.parentElement.remove();
        updateCartTotal();
}


function quantityChanged(event) {
    var input = event.target
    if(isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal();
}


function addToCartClicked(event){
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    // shop title query
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText;
    console.log(title);
    // shop price query
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText;
    console.log(price);
    //image source/url query
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src;
    console.log(imageSrc);

    addItemToCart(title, price, imageSrc);
    updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}


  

</script>


    </body>
</html>