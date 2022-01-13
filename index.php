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
       <main id="index-main">
           <div class="container">
               <div class="m-4 mb-5">
                   <picture class="position-relative">
                       <img class="w-100" src="images/running.jpg">
                       <div class="p-2 w-100 position-absolute d-none d-lg-block d-xl-block" style="background-color: black;">
                           <div class="row">
                               <div class="col">
                                   <a class="text-decoration-none text-white font-weight-bold" href="">EASY DELIVER WORLDWIDE</a>
                               </div>
                               <div class="col text-right">
                                   <p class="m-0 text-white font-weight-bold" href="">DISCOVER OVER 850 BRANDS</p>
                               </div>
                           </div>
                       </div>
                   </picture>
               </div>
           </div>
            <div class="p-4">
                <div class="social-payment text-center">
                    <div class="social">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item pr-3">
                            <a href="">
                                <img class="rounded-circle" style="width:33px; height: 33px;" src="images/facebook.png">
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="">
                                <img class="rounded-circle" style="width:33px; height: 33px;" src="images/instagram.png">
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="">
                                <img class="rounded-circle" style="width:33px; height: 33px;" src="images/twitter.png">
                            </a>
                        </li>
                    </ul>
                    </div>
                    <div class="payment">
                    <ul class="list-unstyled list-inline inline-block">
                        <li class="list-inline-item pr-3">
                            <a href="">
                                <img class="rounded-circle" style="width:33px; height: 33px;" src="images/mastercard.png">
                            </a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a href="">
                                <img class="rounded-circle" style="width:33px; height: 33px;" src="images/paypal.png">
                            </a>
                        </li>
                    </ul>
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