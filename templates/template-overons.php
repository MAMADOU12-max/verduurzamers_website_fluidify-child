<?php /** Template Name: Template OverOns */ ?>


<!-- -------------------------------------------------- Include header ------------------------------------------------- -->
<?php include "components/header-base.php"; ?>
<!-- -------------------------------------------------- Include header ------------------------------------------------- -->

<?php
/** Getting experts */

$experts = get_posts(
    array(
        'post_type' => 'expert',
        'posts_per_page' => 3,
        'orderby' => 'desc',
    )
);

?>

<!-- ------------------------------------------- Start First Over ons slide ------------------------------------------ -->
<section class="first-slide-overOns_img">
    <div class="container px-md-4">
        <div class="row ">
            <div class="col-md-5 col-12 text-md-start text-center">
                <h2 class="text-white display-5 fw-bold text-break text-md-start text-center">SLUIT JE AAN&nbsp; BIJ HET GILDE VAN VERDUURZAMERS.</h1>
                <button type="button" class="btn text-white my-3 px-5 font-weight rounded-pill py-1"
                style="background-color: #D50074;">
                    <span class="fw-bold">LID WORDEN</span> 
                </button>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------- End First Over ons slide -------------------------------------------- -->


<!-- ----------------------------------------------- Start Content section ------------------------------------------- -->
<section class="">
    <div class="container p-md-4 p-1">

        <div class="my-3">
            <div class="row mx-md-5 my-md-1 mb-1">
                <div class="col-md-2 d-flex justify-content-md-start justify-content-center">
                    <h2 class="text-md-start text-center text-break fw-bold text-success">
                        WAAROM?
                    </h2>
                </div>
                <div class="col-md-10 d-none d-md-flex border-bottom border-5 border-success mb-3">
                </div>
            </div>
            
            <div class="row d-flex justify-content-center m-md-3 m-lg-5 mt-lg-0 mt-1 my-3 m-1">
                
                <h4 class="fw-bold text-md-start text-center">Is het nodig; een gilde voor verduurzamers?</h4>
                <div class="col-lg-4 col-11 pt-3" >
                    <img class="img-fluid w-100" style="max-height: 300px"  src="<?php echo get_stylesheet_directory_uri();?>/images/01_test-afbeelding-01-opleidingen-homepage.jpg" alt="Card image cap">
                </div>
                <div class="col-lg-8 col-11 my-md-1 my-4">
                    <h4 class="fw-bold my-2 text-md-start text-center">Titel item</h4>
                    <p class="text-md-start text-center">Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy nibh eu-ismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    ismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    minim. <br>
                    Lorem ipsum dolor sit amet, consectetuer aliquam erat volutpat. Ut wisi enim ad
                    adipiscing elit, sed diam nonummy nibh eu- aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim adaliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    ismod tincidunt ut laoreet dolore.</p>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="row mx-md-5 my-md-1 mb-1">
                <div class="col-md-11 d-none d-md-flex border-bottom border-5 border-success mb-3">
                </div>
                <div class="col-md-1 d-flex justify-content-md-end justify-content-center">
                    <h2 class="text-md-start text-center fw-bold text-success">
                        WIE?
                    </h2>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center m-md-3 m-lg-5 mt-lg-0 mt-1 my-3 m-1">
                
                <h4 class="fw-bold text-md-end text-center">Is het nodig; een gilde voor verduurzamers?</h4>
                <div class="col-lg-8 col-11 my-md-1 my-4 order-md-0 order-1">
                    <h4 class="fw-bold my-2 text-md-start text-center">Titel item</h4>
                    <p class="text-md-start text-center">Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy nibh eu-ismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    ismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    minim. <br>
                    Lorem ipsum dolor sit amet, consectetuer aliquam erat volutpat. Ut wisi enim ad
                    adipiscing elit, sed diam nonummy nibh eu- aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim adaliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    ismod tincidunt ut laoreet dolore.</p>
                </div>
                <div class="col-lg-4 col-11 pt-3 order-md-1 order-0">
                    <img class="img-fluid w-100" style="max-height: 300px"  src="<?php echo get_stylesheet_directory_uri();?>/images/01_test-afbeelding-01-opleidingen-homepage.jpg" alt="Card image cap">
                </div>
                
            </div>
        </div>

        <div class="my-2">
            <div class="row mx-md-5 my-md-1 mb-1">
                <div class="col-md-1 d-flex justify-content-md-start justify-content-center">
                    <h2 class="text-md-end text-center fw-bold text-success">
                        WAT?
                    </h2>
                </div>
                <div class="col-md-11 d-none d-md-flex border-bottom border-5 border-success mb-3">
                </div>
            </div>
            
            <div class="row d-flex justify-content-center m-md-3 m-lg-5 mt-lg-0 mt-1 my-3 m-1">
                
                <h4 class="fw-bold text-md-start text-center">Is het nodig; een gilde voor verduurzamers?</h4>
                <div class="col-lg-4 col-11 pt-3" >
                    <img class="img-fluid w-100" style="max-height: 300px"  src="<?php echo get_stylesheet_directory_uri();?>/images/01_test-afbeelding-01-opleidingen-homepage.jpg" alt="Card image cap">
                </div>
                <div class="col-lg-8 col-11 my-md-1 my-4">
                    <h4 class="fw-bold my-2 text-md-start text-center">Titel item</h4>
                    <p class="text-md-start text-center">Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy nibh eu-ismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    ismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    minim. <br>
                    Lorem ipsum dolor sit amet, consectetuer aliquam erat volutpat. Ut wisi enim ad
                    adipiscing elit, sed diam nonummy nibh eu- aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim adaliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    aliquam erat volutpat. Ut wisi enim ad aliquam erat volutpat. Ut wisi enim ad
                    ismod tincidunt ut laoreet dolore.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ----------------------------------------------- End Content section ----------------------------------------------- -->



<!-- ----------------------------------------------- Start bande section ---------------------------------------------- -->
<section class="section-band d-flex align-items-center justify-content-md-center">
    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-light fw-bold">“Eigenlijk willen we allemaal verduurzamers zijn...”</h2>
                </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------------- End bande section ---------------------------------------------- -->


<!-- ---------------------------------------------- Start swiper section --------------------------------------------- -->
<section>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-md-8 col-11 ">
                <h2 class="text-center fw-bold text-success">DE VERDUURZAMERS</h2>
        
                <div class="slide_profils text-center mx-md-5">
                        
                    <!-- Displaying all experts  -->
                    <?php 
                        foreach($experts as $expert)
                        {
                    ?>   
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid rounded rounded-circle swiper-img border-success" src=<?= get_the_post_thumbnail_url( $expert->ID); ?> alt="">                  
                        </div>
                    <?php
                    }
                    ?>

                    

                    
                </div>

                <div class="row d-flex justify-content-center">
                    <p class="col-md-6 mt-5 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sequi sed e
                        ligendi. Blanditiis, laudantium invenorum possimus obcaecati!
                    </p>
                    <div class="text-center">
                        <button type="button" class="btn text-white my-3 px-md-5 px-3 font-weight rounded-pill py-1"
                        style="background-color: #D50074;">
                            <span class="fw-bold">BEKIJK ALLE VERDUURZAMERS</span> 
                        </button>
                    </div>
                </div>
                    
            </div>
        </div>
    </div> 
</section>   
<!-- ----------------------------------------------- End swiper section ---------------------------------------------- -->


<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
<?php include "components/footer-base.php"; ?>
<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.slide_profils').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: true,
        speed: 300,
        nextArrow: '<i class="fa fa-arrow-left fa-2x bg-success text-white p-1 px-2 rounded-pill positionned_arrow left_arrow"></i>',
        prevArrow: '<i class="fa fa-arrow-right fa-2x bg-success text-white p-1 px-2 rounded-pill positionned_arrow right_arrow"></i>',

        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerMode: false 
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]
    });
</script>