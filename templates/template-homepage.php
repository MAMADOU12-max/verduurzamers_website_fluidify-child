<?php /** Template Name: Template Homepage */ ?>
<?php

/* 
    Getting Nieuws, Courses and Experts post
*/
    $nieuws = get_posts( 
        array(
            'post_type' => 'nieuws',
            'posts_per_page' => 3,
        )
    );
    $experts = get_posts(
        array(
            'post_type' => 'expert',
            'orderby' => 'desc'
        )
    );
    $courses= get_posts(
        array(
            'post_type' => 'course',
            'posts_per_page' => 2,
            'orderby' => 'desc',
        )
    );
?>


<!-- -------------------------------------------------- Include header ------------------------------------------------- -->
<?php include "components/header-base.php"; ?>
<!-- -------------------------------------------------- Include header ------------------------------------------------- -->


<!-- --------------------------------------- Start modal to become a member -------------------------------------------- -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end border-bottom-0">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="bg-danger text-white border-0 p-2 px-3 rounded  rounded-3 fw-bold" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body px-md-5 px-3">
                <form id="form" class="form">

                    <div class="mb-4">
                        <h3 class="text-center my-2">Become a member</h3>
                    </div>

                    <!-- Voornaam input -->
                    <div class="mb-4 form-outline">
                        <label class="form-label" for="email">Voornaam</label>
                        <input type="text" class="form-control" placeholder="voornaam" id="email" />
                    </div>

                    <!-- Achternaam input -->
                    <div class="mb-4 form-outline">
                        <label class="form-label" for="email">Achternaam</label>
                        <input type="text" class="form-control" placeholder="achternaam" id="email" />
                    </div>

                    <!-- Email input -->
                    <div class="mb-4 form-outline">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" placeholder="email" id="email" />
                    </div>

                    <!-- Bedrijf input -->
                    <div class="mb-4 form-outline">
                        <label class="form-label" for="email">Bedrijf</label>
                        <input type="text" class="form-control" placeholder="bedrijf" id="email" />
                    </div>

                    <!-- Functie input -->
                    <div class="mb-4 form-outline">
                        <label class="form-label" for="email">Functie</label>
                        <div>
                            <textarea name="functie" id="functie" placeholder="job description" class="w-100" rows="5"></textarea>
                        </div>
                    </div>


                    <div class="d-grid gap-2 col-12 mx-auto mb-4">
                        <button class="btn btn-success" type="button"><strong>Submit</strong></button>
                    </div>

                </form>
            </div>

            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
<!-- --------------------------------------- End modal to become a member -------------------------------------------- -->


<!-- ------------------------------------------ Start First homepage slide ------------------------------------------- -->
<section class="first-slide-homepage_img">
    <div class="container">
        <div class="row mx-md-2">
            <div class="col-md-5 col-12 text-md-start text-center"> 
                <h2 class="text-white display-5 fw-bold text-break">SLUIT JE AAN&nbsp; BIJ HET GILDE VAN VERDUURZAMERS.</h1>
                <button type="button" class="btn text-white my-3 px-5 font-weight rounded-pill py-1"
                style="background-color: #D50074;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="fw-bold">LID WORDEN</span> 
                </button>
            </div>
        </div>
    </div>
</section>
<!-- -------------------------------------------- End First homepage slide ------------------------------------------- -->


<!-- ------------------------------------------ Start Second homepage slide ------------------------------------------ -->
<section class="sectionIn" >
    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-md-10">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 col-11 d-flex justify-content-md-end justify-content-center nopadding my-md-0 my-5">
                        <div class="card border border-0" style="background: none; max-width: 22rem;">
                            <div class="card-body text-center">
                                <!-- <div class="card-title text-center mb-0">
                                        <img class="img-fluid rounded rounded-circle profile_img border-5 border-success border "
                                        src="https://tse3.mm.bing.net/th?id=OIP.hxRValICG6OlXI56NUfSjAHaF1&pid=Api&P=0&w=220&h=173" alt="">
                                        <h4 class="text-white mb-0 p-4">VIN EEN VERDUURZAMER</h4>
                                </div> -->
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid rounded rounded-circle profile_img border-success border "
                                    src="<?php echo get_stylesheet_directory_uri();?>/images/01_icon_vind-een-verduurzamer.png" alt="">
                                    <h4 class="text-detached text-white text-center text-break fw-bold w-75">
                                        VIN&nbsp;EEN VERDUURZAMER
                                    </h4>
                                </div>
                                <div class="card-title d-flex justify-content-center mb-0"></div>

                                <div class="card-text p-3 text-center" style="background-color:#F8F8F8;">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus necessitatibus dolore.</p> 
                                    <button type="button" class="btn text-white my-3 px-5 font-weight rounded-pill py-1"
                                    style="background-color: #2DAB66;">
                                        <span class="fw-bold">LID WORDEN</span>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-11 d-flex justify-content-md-center justify-content-center nopadding my-md-0 my-5">
                        <div class="card border border-0" style="background: none; width: 22rem;">
                                <div class="card-body text-center">
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid rounded rounded-circle profile_img border-success border "
                                    src="<?php echo get_stylesheet_directory_uri();?>/images/01_icon_wat-is-het-gilde.png" alt="">
                                    <h4 class="text-detached text-white text-center text-break fw-bold w-75">
                                    VIN&nbsp;EEN VERDUURZAMER
                                    </h4>
                                </div>
                            
                                <div class="card-title text-center mb-0 d-flex justify-content-center"></div>
                                <div class="card-text p-3 text-center" style="background-color:#F8F8F8;">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus necessitatibus dolore.</p> 
                                    <button type="button" class="btn text-white my-3 py-1 px-5 font-weight rounded-pill"
                                    style="background-color: #2DAB66;">
                                        <span class="fw-bold">LID WORDEN</span>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-11 d-flex justify-content-md-start justify-content-center nopadding my-md-0 my-5">
                        <div class="card border border-0" style="background: none; width: 22rem;">
                            <div class="card-body text-center">
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid rounded rounded-circle profile_img border-success border "
                                    src="<?php echo get_stylesheet_directory_uri();?>/images/01_icon_lid-worden.png" alt="">
                                    <h4 class="text-detached text-white text-center text-break fw-bold w-75">
                                        VIN&nbsp;EEN VERDUURZAMER
                                    </h4>
                                </div>
                            
                                <div class="card-title mb-0 d-flex justify-content-center"></div>
                            
                                <div class="card-text p-3 text-center" style="background-color:#F8F8F8;">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus necessitatibus dolore.</p> 
                                    <button type="button" class="btn text-white my-3 px-5 font-weight rounded-pill py-1"
                                    style="background-color: #2DAB66;">
                                        <span class="fw-bold">LID WORDEN</span>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ------------------------------------------- End Second homepage slide ------------------------------------------- -->


<!-- ---------------------------------------------- Start expert slide section --------------------------------------------- -->
<section>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-md-8 col-11 ">
                <h2 class="text-center fw-bold text-success">DE VERDUURZAMERS</h2>
        
                <div class="slide_profils text-center mx-md-5">
                     <!-- Displaying all experts  -->
                    <?php 
                        foreach($experts as $expert){
                    ?>   
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid rounded rounded-circle swiper-img border border-4 border-success"
                                src=<?= get_the_post_thumbnail_url( $expert->ID); ?> alt="">                  
                            </div>
                    <?php
                        }
                    ?>
                        <!----------- default avatar profil ------------>
                         <!-- <div class="d-flex justify-content-center">
                            <img class="img-fluid rounded rounded-circle swiper-img border border-4 border-success p-2"
                            src="<?php echo get_stylesheet_directory_uri();?>/images/default-image.jpg" alt="">                  
                        </div> -->
                        <!----------- default avatar profil ------------>

                </div>

                <div class="row d-flex justify-content-center">
                    <p class="col-md-6 mt-5 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sequi sed e
                        ligendi. Blanditiis, laudantium invenorum possimus obcaecati!
                    </p>
                    <div class="text-center">
                        <button type="button" class="btn text-white my-3 px-md-5 px-3 font-weight rounded-pill py-1"
                        style="background-color: #D50074;">
                            <span class="fw-bold">BEKIJK ALLEprojecten VERDUURZAMERS</span> 
                        </button>
                    </div>
                </div>
                    
            </div>
        </div>
    </div> 
</section>  
<!-- ----------------------------------------------- End expert slide section ---------------------------------------------- -->



<!-- ----------------------------------------------- Start bande section ---------------------------------------------- -->
<section class="section-band my-5 d-flex align-items-center justify-content-md-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-light fw-bold">“Eigenlijk willen we allemaal verduurzamers zijn...”</h2>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------------- End bande section ---------------------------------------------- -->


<!-- ------------------------------------------------- Start Nieuws section ---------------------------------------------- -->
<section class="m-4">
    <div class="container">
        <div class="row my-md-1 my-3 mx-md-5 d-flex justify-content-md-between">
            <div class="col-md-2">
                <h1 class="text-md-start text-center fw-bold text-success">NIEUWS</h1>
            </div>
            <div class="col-md-10 d-none d-md-flex border-bottom border-5 border-success mb-3"></div>
        </div>

        <div class="row my-md-2 mx-md-4 d-flex justify-content-md-start justify-content-center">
            <?php
            foreach($nieuws as $nieuw){
                $summary=get_field('summary', $nieuw->ID);
                $img=get_the_post_thumbnail_url($nieuw->ID);
            ?>
                <div class="col-md-4 col-12 mt-4 d-flex justify-content-md-center justify-content-center">                    
                    <div class="d-flex flex-column bd-highlight">
                        <div class="bd-highlight">
                            <h4 class="fw-bold text-md-start text-center"> <?= $nieuw->post_title; ?> </h4>
                        </div>
                        <div class="bd-highlight">
                            <div class="card border-0" style="max-width: 22rem; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                                 <img class="card-img-top img-fluid" style="height: 12rem" src="<?= $img; ?>" alt="Card image cap">
                              
                                <!-- ----------------------------- start default image news ------------------------------------>
                                 <!-- <img class="card-img-top img-fluid" style="height: 12rem" 
                                src="<?php echo get_stylesheet_directory_uri();?>/images/default-course&news.jpg" alt="Card image cap">  -->
                                <!-- ------------------------------ end default image news ------------------------------------->


                                <div class="card-body m-4">
                                    <div class="card-text d-flex justify-content-center card-text-limited">
                                        <?= $summary; ?>
                                    </div>
                                    <div class="text-md-center">
                                        <a href=<?= "template-detail-nieuws/?nieuws-id=".$nieuw->ID;?> >    
                                            <button type="button" class="btn text-white px-5 py-1 font-weight rounded-pill"
                                            style="background-color: #2DAB66;">
                                                <span class="fw-bold">LID WORDEN</span>
                                            </button>
                                        </a>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <div class="row">
            <div class="col-12 mt-5 text-center"> 
                <a type="button" class="btn text-white my-3 px-5 font-weight rounded-pill py-1" href="/all-nieuws"
                    style="background-color: #D50074;" >
                    <span class="fw-bold">Lees meer</span> 
                </a>
            </div>
        </div>
    </div>
</section>
<!-- -------------------------------------------------- End Nieuws section ----------------------------------------------- -->



<!-- ----------------------------------------------- Start Courses section ------------------------------------------- -->
<section class="section-content my-md-5">
    <div class="container p-md-4 p-1">

        <div class="row mx-md-5 my-md-1 my-3">
            <div class="col-md-5 d-flex justify-content-md-end">
                <h2 class="text-md-start text-center text-break fw-bold text-success">
                    OPLEIDINGEN
                VOOR&nbsp;VERDUURZAMERS
                </h2>
            </div>
            <div class="col-md-7 d-none d-md-flex border-bottom border-5 border-success mb-3"></div>
        </div>
            <!-- CARDS -->

        <?php 
            foreach ($courses as $course){
                $img=get_field('image', $course->ID);
                $summary=get_field('summary', $course->ID);
        ?>   
            <div class="row d-flex justify-content-center m-md-3 mx-lg-5 pb-5 m-1">
                <h4 class="fw-bold text-md-start text-center">Workplace management in 6-dagdelen</h4>
                    <div class="col-lg-8 col-11" >     
                         <img class="img-fluid w-100" style="max-height: 300px"  src="<?php echo get_the_post_thumbnail_url($course->ID);?>" alt="Card image cap">

                        <!-- --------------------------------- start default image news --------------------------------------->
                         <!-- <img class="img-fluid w-100" style="max-height: 300px"  
                        src="<?php echo get_stylesheet_directory_uri();?>/images/default-course&news.jpg" alt="Card image cap"> --> -->
                        <!-- ----------------------------------- end default image news --------------------------------------->

                    </div>
                <div class="col-lg-4 col-11">
                    <h4 class="fw-bold my-2 text-md-start text-center">
                        <?= get_field('subtitle',$course->ID); ?>
                    </h4>
                    <p class="text-md-start text-center section-text-limited">
                        <?= $summary; ?>
                    </p>
                    <div class="text-md-start text-center">
                        <a href="/template-detail-course?course-id=<?= $course->ID; ?>"> 
                            <button  type="button" class="btn text-white px-5 py-1 font-weight rounded-pill"
                            style="background-color: #2DAB66;">
                            <span class="fw-bold">LEES VERDER</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        
        <div class="row mt-4">
            <div class="col-12 text-center"> 
                <a type="button" class="btn text-white my-3 px-5 font-weight rounded-pill py-1" href="/all-courses"
                    style="background-color: #D50074;">
                    <span class="fw-bold">Lees meer</span> 
                </a>
            </div>
        </div>

    </div>
</section>
<!-- ----------------------------------------------- End Courses section ----------------------------------------------- -->



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