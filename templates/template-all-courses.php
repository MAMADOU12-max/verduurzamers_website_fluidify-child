<?php /** Template Name: Template All Courses */ ?>
<?php
    /* 
        Getting All Courses
    */
    $courses= get_posts(
        array(
            'post_type' => 'course',
            'orderby' => 'desc',
        )
    );

    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }
    $nb_courses=2;
    $start = ($pagina-1)*$nb_courses;
    $end = $pagina*$nb_courses;
    $nb_paginas = ceil(count($courses)/$nb_courses);
    $courses = array_slice($courses, $start, $end);
    $previous= $pagina == 1 ? 1 : $pagina-1;
    $next= $pagina == $nb_paginas ? $nb_paginas : $pagina+1;
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
                <h4 class="fw-bold text-md-start text-center"><?= $course->post_title; ?></h4>
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
                        <a type="button" class="btn text-white px-5 py-1 font-weight rounded-pill" href="/template-detail-course?course-id=<?= $course->ID; ?>"
                            style="background-color: #2DAB66;">
                            <span class="fw-bold">LEES VERDER</span>
                        </a>
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
                    <a href="<?="?pagina=".$previous;?>">&laquo;</a>
                    <?php
                        for ($i=0;$i < $nb_paginas ;$i++) {
                            ?>
                            <a <?php if ($pagina==($i+1)) echo "class='active'"; ?>    href= <?=  "?pagina=".($i+1);?> >  <?=$i+1?> </a>
                            <?php
                                }
                            ?>
                    
                    <a href="<?= "?pagina=".$next;?>"  >&raquo;</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ----------------------------------------------- End All courses section ----------------------------------------------- -->



<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
<?php include "components/footer-base.php"; ?>
<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
