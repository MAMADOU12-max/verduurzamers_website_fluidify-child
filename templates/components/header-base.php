<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css"/>
    <!-- <link rel="stylesheet" href="/style.scss"/> -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>	

    <title>Verduurzamers</title>
  </head>
  <body>

    <!-- -------------------------------------------------- Start header ------------------------------------------------- -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top  ">
            <div class="container px-md-5">
                <!-- this div make the button goes at the left side btw showing a small logo  -->
                <div class="d-md-none d-sm-flex mt-2">
                    <a class="nav-link" aria-current="page" href="#">
                        <img class="img-fluid" width="125rem" src="<?php echo get_stylesheet_directory_uri();?>/images/logo-02 Gilde van Verduurzamers.jpg" alt="">
                    </a>    
                </div>  
            
                <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mx-md-3" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <img class="img-fluid" width="25%" src="<?php echo get_stylesheet_directory_uri();?>/images/logo-02 Gilde van Verduurzamers.jpg" alt="">
                            </a>
                        </li>   
                    </ul>
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item d-none d-lg-flex">
                                <a class="nav-link pt-1"  href="#">
                                    <img class="img-fluid" style="width: 75px;" src="<?php echo get_stylesheet_directory_uri();?>/images/button_home.png" alt="home button">
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-uppercase text-success " href="/index.php/template-overons/">
                                    <span class=" fw-bold link"> Over&nbsp;ons </span>
                                </a>
                            </li>
                            <li></li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-uppercase text-success" href="/index.php/template-zoeker/">
                                    <span class="fw-bold link">Zoeker</span>
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-uppercase text-success" href="/index.php/template-wordlid/">
                                   <span class="fw-bold link ">World&nbsp;lid</span>
                                </a>
                            </li>
                            <li class="nav-item d-none d-lg-flex">
                                <a class="nav-link " href="#">
                                    <img class="img-fluid" style="width: 75px;" src="<?php echo get_stylesheet_directory_uri();?>/images/button_menu-extra.png" alt="menu button">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        
    </header>
    <!-- --------------------------------------------------- End header -------------------------------------------------- -->


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("li").click(function(e){
            // e.preventDefault();
            $(this).addClass("active");
            $(this).siblings().removeClass("active");

        });
    });
</script>
