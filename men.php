<?php
session_start();
include 'php/load_info.php';
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include 'js/main-start.php';?>
      <title>Intense Clothes Store</title>
      <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
      <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
      <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <?php include 'css/style.php';?>
   </head>
   <body>
      <?php include 'components/header.php';?>
       <main id="men-main">
           <div class="wrapper">
            <div class="mt-5">
                <div class="container-fluid">
                     <picture class="position-relative">
                         <img class="w-100" src="images/football.jpg">
                         <div class="position-absolute" style="left:50%; top:50%; transform: translate(-50%, -50%);">
                             <h3 class="text-white font-weight-bold">Get ready</h3>
                             <div class="mt-5">
                                 <a href="" class="text-white text-decoration-none text-center p-3 border border-white" style="background-color: black;">SHOP NOW</a>
                             </div>
                             </div>
                     </picture>
                    <div class="mt-3 mb-3">
                        <ul class="list-unstyled inline-block text-center">
                            <li class="list-inline-item mt-5" style="width: 270px; height: 380px;">
                                <img class="w-100 h-100" src="images/switshirt.jpg">
                                <h5 class="font-weight-bold">Adidas Sweatshirt</h5>
                                <p>Always Iconic</p>
                            </li>
                            <li class="list-inline-item mt-5" style="width: 270px; height: 380px;">
                                <img class="w-100 h-100" src="images/shoes.jpg">
                                <h5 class="font-weight-bold">Adidas Shoes</h5>
                                <p>From the future</p>
                            </li>
                            <li class="list-inline-item mt-5" style="width: 270px; height: 380px;">
                                <img class="w-100 h-100" src="images/shoes.jpg">
                                <h5 class="font-weight-bold">Adidas Shoes</h5>
                                <p>From the future</p>
                            </li>
                            <li class="list-inline-item mt-5" style="width: 270px; height: 380px;">
                                <img class="w-100 h-100" src="images/shoes.jpg">
                                <h5 class="font-weight-bold">Adidas Shoes</h5>
                                <p>From the future</p>
                            </li>
                        </ul>
                    </div>
                    <div class="m-4">
                        <ul class="list-unstyled inline-block text-center">
                            <!--To Do Later-->
                        </ul>
                    </div>
                    <div class="m-4">
                        <h3 class="text-center font-weight-bold">TRENDING BRANDS</h3>
                        <ul class="list-unstyled inline-block text-center">
                            <li class="list-inline-item" style="width: 170px;">
                                <img class="w-100 h-100" src="images/nike.png">
                            </li>
                            <li class="list-inline-item" style="width: 170px;">
                                <img class="w-100 h-100" src="images/adidas.png">
                            </li>
                            <li class="list-inline-item" style="width: 170px;">
                                <img class="w-100 h-100" src="images/puma.png">
                            </li>
                            <li class="list-inline-item" style="width: 170px;">
                                <img class="w-100 h-100" src="images/umbro.png">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           </div>
       </main>
       
       <?php include 'components/footer.php';?>
       <?php include 'components/overlays.php';?>
       <?php include 'js/visual.php';?>
       <?php include 'js/preferences.php';?>
   </body>
</html>