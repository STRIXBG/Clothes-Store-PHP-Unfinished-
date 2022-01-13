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
      <title>Brand name</title>
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
      <main id="brands-main">
         <div class="bg-white p-3">
            <div class="container">
               <a class="black-blue-link text-decoration-none" href="">Home</a>
               <span>
               </span>
            </div>
         </div>
          <div class="bg-light p-4 text-center">
              <h3 class="font-weight-bold">Adidas</h3>
              <div class="container">
                  <div class="short-text-read-more" style="">
                    <p class="short-text-3">adidas needs no introduction. With a history stretching back over 60 years, the brand’s sports and streetwear designs have become key players in wardrobes everywhere. For that fresh-kit motivation, filter by adidas Performance for everything from techy tracksuits to sweat-wicking shorts, vests and compression tights. Inspired by street culture and retro styles, adidas Originals brings those fresh, archive-inspired T-shirts and sweatshirts we all know and love, alongside iconic Superstar, Stan Smith, Gazelle and Continental 80 trainers. Scroll the adidas at ASOS edit to check out our favourites – if you’re not already.</p>
                    <div class="read-more d-none">
                        <h5 class="font-weight-bold cursor-pointer p-3">
                            Read More
                        </h5>
                    </div>
                    <div class="read-less d-none">
                        <h5 class="font-weight-bold cursor-pointer p-3">
                            Read Less
                        </h5>
                    </div>
                  </div>
              </div>
          </div>
          <!-- Large Devices open -->
          <div class=" d-none d-lg-block d-xl-block p-3" style="background-color:#c8c9d1;">
              <div class="container">
                  <ul class="list-unstyled list-inline">
                      <li class="list-inline-item mr-3 mt-3">
                          <div style="background-color: #999999;">
                              <button class="pr-4 pl-4 pt-2 pb-2 border-0 text-dark" style="background-color: #999999;">Sort</button>
                                <i class="fa pr-4 pl-4 pt-2 pb-2 border-0 fa-caret-down cursor-pointer" style="background-color: #999999;"></i>
                          </div>
                      </li>
                      <li class="list-inline-item mr-3 mt-3">
                          <div style="background-color: #999999;">
                              <button class="pr-4 pl-4 pt-2 pb-2 border-0 text-dark" style="background-color: #999999;">Category</button>
                                <i class="fa pr-4 pl-4 pt-2 pb-2 border-0 fa-caret-down cursor-pointer" style="background-color: #999999;"></i>
                          </div>
                      </li>
                      <li class="list-inline-item mr-3 mt-3">
                          <div style="background-color: #999999;">
                              <button class="pr-4 pl-4 pt-2 pb-2 border-0 text-dark" style="background-color: #999999;">Brand</button>
                                <i class="fa pr-4 pl-4 pt-2 pb-2 border-0 fa-caret-down cursor-pointer" style="background-color: #999999;"></i>
                          </div>
                      </li>
                      <li class="list-inline-item mr-3 mt-3">
                          <div style="background-color: #999999;">
                              <button class="pr-4 pl-4 pt-2 pb-2 border-0 text-dark" style="background-color: #999999;">Colour</button>
                                <i class="fa pr-4 pl-4 pt-2 pb-2 border-0 fa-caret-down cursor-pointer" style="background-color: #999999;"></i>
                          </div>
                      </li>
                      <li class="list-inline-item mr-3 mt-3">
                          <div style="background-color: #999999;">
                              <button class="pr-4 pl-4 pt-2 pb-2 border-0 text-dark" style="background-color: #999999;">Size</button>
                                <i class="fa pr-4 pl-4 pt-2 pb-2 border-0 fa-caret-down cursor-pointer" style="background-color: #999999;"></i>
                          </div>
                      </li>
                      <li class="list-inline-item mr-3 mt-3">
                          <div style="background-color: #999999;">
                              <button class="pr-4 pl-4 pt-2 pb-2 border-0 text-dark" style="background-color: #999999;">Price Range</button>
                                <i class="fa pr-4 pl-4 pt-2 pb-2 border-0 fa-caret-down cursor-pointer" style="background-color: #999999;"></i>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- Large Devices close -->
      </main>
      <?php include 'components/footer.php';?>
      <?php include 'components/overlays.php';?>
      <?php include 'js/visual.php';?>
      <?php include 'js/preferences.php';?>
   </body>
</html>