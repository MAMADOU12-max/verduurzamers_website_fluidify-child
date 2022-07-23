<?php /** Template Name: Template Zoeker */ ?>

<!-- PHP CODE -->
<?php 
    $experts = get_posts(
        array(
            'post_type' => 'expert',
            'posts_per_page' => 9,
            'order' => 'ASC'
        )
    ); 

    $courses= get_posts(
        array(
            'post_type' => 'course',
            'posts_per_page' => 1,
            'orderby' => 'desc',
        )
    );
?>


<!-- -------------------------------------------------- Include header ------------------------------------------------- -->
<?php include "components/header-base.php"; ?>
<!-- -------------------------------------------------- Include header ------------------------------------------------- -->


<!-- ------------------------------------------- Start First Over ons slide ------------------------------------------ -->
<section class="first-slide-zoeker">
    <div class="container px-md-4">
        <div class="row">
            <div class="col-md-5 col-12 text-md-start text-center">
                <h2 class="text-white display-5 fw-bold text-break text-md-start text-center">VIND&nbsp;VERDUURZAMER&nbsp;MET DE JUISTE SKILLS.</h1>
                <a type="button" class="btn text-white my-3 px-5 font-weight rounded-pill py-1"
                    style="background-color: #D50074;" href="/template-zoeker-second">
                    <span class="fw-bold">browsen</span> 
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------- End First Over ons slide -------------------------------------------- -->



<!-- ----------------------------------------------- Start courses section ------------------------------------------- -->
<section class="my-3">
    <div class="container p-md-4 p-1">

        <?php 
            foreach ($courses as $course) {
                $img=get_field('image', $course->ID);
                $summary=get_field('summary', $course->ID);
        ?>   

            <div class="my-2">
                <div class="row mx-md-5 my-md-1 mb-1">
                    <div class="col-md-4 d-flex justify-content-md-start justify-content-center">
                        <h2 class="text-md-start text-center text-break fw-bold text-success">
                            DE VERDUURZAMERS
                        </h2>
                    </div>
                    <div class="col-md-8 d-none d-md-flex border-bottom border-5 border-success mb-3">
                    </div>
                </div>
                
                <div class="row d-flex justify-content-center m-md-3 m-lg-5 mt-lg-0 mt-1 my-3 m-1 pt-3">
                    <div class="col-md-4 col-11 order-md-0 order-1 mt-5 mt-md-0">
                        <h4 class="fw-bold text-md-start text-center"><?= get_field('subtitle',$course->ID); ?></h4>
                        <p class="text-md-start text-center section-text-limited"> <?= $summary; ?></p>
                        <div class="text-md-start text-center">
                            <a type="button" class="btn text-white px-5 py-1 font-weight rounded-pill"
                                style="background-color: #2DAB66;" href="/template-detail-course?course-id=<?= $course->ID; ?>">
                                <span class="fw-bold">LEES VERDER</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-11 p-md-0 order-md-1 order-0">
                        <img class="img-fluid w-100" style="max-height: 300px" 
                        src="<?php echo get_the_post_thumbnail_url($course->ID);?>" alt="01_test-afbeelding-01-opleidingen-homepage">
                    </div>
                </div>
            </div>

        <?php
            }
        ?>    

    </div>
</section>
<!-- ----------------------------------------------- End courses section ----------------------------------------------- -->



<!-- ------------------------------------------- Start Card profils section -------------------------------------------- -->
<section>
    <div class="container"> 
        <div class="row mx-md-5 my-md-5 d-flex justify-content-center justify-content-md-start">
            <?php
                foreach ($experts as $key => $expert){
                    $firstname= get_field('voornaam', $expert->ID);
                    $lastname= get_field('achternaam', $expert->ID);
                    $image= get_the_post_thumbnail_url($expert->ID);
            ?>
                <div class="col-md-4 col-11 d-flex justify-content-md-end justify-content-center nopadding my-md-3 my-5">
                    <div class="card border border-0 mb-5" style="background: none; width: 22rem;">
                            <div class="card-body text-center">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid rounded rounded-circle profile_img border border-4 border-success"
                                src="<?= $image; ?>" alt="profielfoto-cartoon_HV">
                                <h4 class="text-detached text-white text-center text-break fw-bold w-75">
                                <?= $firstname.'&nbsp;'.$lastname; ?>
                                </h4>
                            </div>
                        
                            <div class="card-title_zoeker text-center mb-0 d-flex justify-content-center"></div>
                            
                        </div>
                    </div>
                </div>

                
            <?php
                }
            ?>      
        </div>

        <div class="row d-flex justify-content-center">
            <p class="col-md-6 col-11 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sequi sed e
                ligendi. Blanditiis, laudantium invenorum possimus obcaecati!
            </p>
            <div class="text-center">
                <a href="/index.php/template-zoeker-second/" class="btn text-white my-3 px-md-5 px-3 font-weight rounded-pill py-1"
                style="background-color: #D50074;">
                    <span class="fw-bold">BEKIJK ALLE VERDUURZAMERS</span> 
                </a>
            </div>
        </div>

    </div>
</section>
<!-- -------------------------------------------- End Card profils section --------------------------------------------- -->



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



<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
<?php include "components/footer-base.php"; ?>
<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->


