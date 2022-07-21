<?php /** Template Name: Template All Courses */ ?>
<?php
    /* 
        Getting Nieuws, Courses and Experts post
    */
    $courses= get_posts(
        array(
            'post_type' => 'course',
            'orderby' => 'desc',
        )
    );
?>


<!-- -------------------------------------------------- Include header ------------------------------------------------- -->
<?php include "components/header-base.php"; ?>
<!-- -------------------------------------------------- Include header ------------------------------------------------- -->



<!-- ---------------------------------------------- Start All courses section ------------------------------------------ -->
<section class="section-content my-md-5 pt-5">
    <div class="container p-md-4 p-1 ">

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
                        <!-- <div class="card" > -->
                            <img class="img-fluid w-100" style="max-height: 300px"  src="<?php echo get_the_post_thumbnail_url($course->ID);?>" alt="Card image cap">
                        <!-- </div> -->
                    </div>
                <div class="col-lg-4 col-11">
                    <h4 class="fw-bold my-2 text-md-start text-center">
                        <?= get_field('subtitle',$course->ID); ?>
                    </h4>
                    <p class="text-md-start text-center section-text-limited">
                        <?= $summary; ?>
                    </p>
                    <div class="text-md-start text-center">
                        <button type="button" class="btn text-white px-5 py-1 font-weight rounded-pill"
                            style="background-color: #2DAB66;">
                            <span class="fw-bold">LEES VERDER</span>
                        </button>
                    </div>
                </div>
            </div>

        <?php
            }
        ?>
        
        <!-- Pagnination -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ----------------------------------------------- End All courses section ----------------------------------------------- -->



<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
<?php include "components/footer-base.php"; ?>
<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
